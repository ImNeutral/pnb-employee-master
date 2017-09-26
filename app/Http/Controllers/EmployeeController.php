<?php

namespace App\Http\Controllers;

use App\Account;
use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $page       = $request->input('page') > '0'? $request->input('page') : 1;
        $search     = $request->input('search') > ' '? $request->input('search') : '';
        $key        = $request->input('key');

        $page       = (int)$page <= 0? 1 : $page;
        $perPage    = 10;
        //$search     = '%' . strip_tags($search) . '%';
        $search     = "%" . implode("%", explode(" ", strip_tags($search))) . "%";

        if($key == 'active'){
            $key = '1';
        } elseif($key == 'inactive') {
            $key = '0';
        } elseif($key == 'all') {
            $key = 'all';
        } else {
            $key = 'none';
        }

        if($key == 'none'){
            $count = 0;
            $employees = [];

        } elseif($key == 'all'){
            $count      = Employee::where(DB::raw("CONCAT(first_name, middle_name, last_name)"), 'like', $search)
                ->count();
            $employees  = Employee::where(DB::raw("CONCAT(first_name, middle_name, last_name)"), 'like', $search)
                ->offset(($page-1) * $perPage)
                ->limit($perPage)
                ->orderBy('first_name', 'ASC')
                ->get();
        } else {
            $count      = Employee::where(DB::raw("CONCAT(first_name, middle_name, last_name)"), 'like', $search)
                ->where('active', '=', $key)
                ->count();
            $employees  = Employee::where(DB::raw("CONCAT(first_name, middle_name, last_name)"), 'like', $search)
                ->where('active', '=', $key)
                ->offset(($page-1) * $perPage)
                ->limit($perPage)
                ->orderBy('first_name', 'ASC')
                ->get();
        }

        $getInputs      = '&search=' . (isset($_GET['search'])? $_GET['search'] : '') . '&key=' . (isset($_GET['key'])? $_GET['key'] : 'all');
        $allPages       = (int)($count/$perPage) + ($count%$perPage>0? 1 : 0);
        $currentPage    = isset($_GET['page'])? $_GET['page'] : 1;
        $entriesFrom    = (($currentPage-1) * $perPage) + 1;
        //$entriesTo      = ($currentPage==$allPages || $allPages == 1)? (($currentPage-1) * $perPage) + ($count%$perPage) : (($currentPage-1) * $perPage) + $perPage;
        $isFirstPage    = ($page == 1 )? 'disabled' : '';
        $isLastPage     = ($page == $allPages )? 'disabled' : '';

        $returnParam = [
            'employees'     => $employees,
            'perPage'       => $perPage,
            'count'         => $count,
            'getInputs'     => $getInputs,
            'allPages'      => $allPages,
            'currentPage'   => $currentPage,
            'isFirstPage'   => $isFirstPage,
            'isLastPage'    => $isLastPage,
            'entriesFrom'   => $entriesFrom
        ];

        return view('employee.employees')->with($returnParam);
    }

    public function create()
    {
        return view('employee.employeesAdd');
    }


    public function store(Request $request)
    {
        if($this->validateDuplicate($request->input('first_name'), $request->input('last_name'))){
            $request->flash();
            return redirect('employee/create')->withErrors(['token' => 'The name you specified already exists!']);
        }

        Validator::make($request->all(), Employee::validationRule(), Employee::validationMessage())->validate();

        $employee                   = new Employee;
        $employee->first_name       = ucwords(strtolower($request->input('first_name')));
        $employee->middle_name      = ucwords(strtolower($request->input('middle_name')));
        $employee->last_name        = ucwords(strtolower($request->input('last_name')));
        $employee->sex              = strtoupper($request->input('sex'));
        $employee->civil_status     = strtoupper($request->input('civil_status'));
        $employee->position         = ucwords(strtolower($request->input('position')));
        $employee->birthdate        = $request->input('birthdate');
        $employee->contact_number   = $request->input('contact_number');
        $employee->address          = $request->input('address');
        $employee->active           = $request->input('active');
        $employee->save();

        $returnParams = [
                'message'       => 'Successfully Added New Employee!',
                'successAdd'    => '1',
                'employeeId'    => $employee->id
                ];
        $request->flash();
        return redirect('employee/create')->with($returnParams);
    }


    public function show(Request $request, $key)
    {

    }

    public function edit($id) {
        $employee = Employee::find($id);
        if(!isset($employee->id)){
            return view('errors.404');
        }

        return view('employee.employeesEdit')->with(['employee' => $employee]);

    }


    public function update(Request $request, $id)
    {
        if($this->validateDuplicate($request->input('first_name'), $request->input('last_name'), $id)){
            return redirect('/employee/' . $id . '/edit')->withErrors(['token' => 'The name you specified already exists!']);
        }

        Validator::make($request->all(), Employee::validationRule(), Employee::validationMessage())->validate();

        $employee                   = Employee::find($id);

        if(!isset($employee->id)) {
            return view('errors.404');
        }

        $employee->first_name       = ucwords(strtolower($request->input('first_name')));
        $employee->middle_name      = ucwords(strtolower($request->input('middle_name')));
        $employee->last_name        = ucwords(strtolower($request->input('last_name')));
        $employee->sex              = strtoupper($request->input('sex'));
        $employee->civil_status     = strtoupper($request->input('civil_status'));
        $employee->position         = ucwords(strtolower($request->input('position')));
        $employee->birthdate        = $request->input('birthdate');
        $employee->contact_number   = $request->input('contact_number');
        $employee->address          = $request->input('address');
        $employee->active           = $request->input('active');
        $employee->save();

        return redirect('/employee/' . $employee->id . '/edit')->with(['message' => 'Successfully Saved Changes!']);
    }

//    public function search($page = 1, $search = ''){
//        $page       = (int)$page == 0? 1 : $page;
//        $perPage    = 10;
//        $search     = '%' . $search . '%';
//        $employee   = Employee::where('first_name', 'like', $search)
//                                ->orWhere('middle_name', 'like', $search)
//                                ->orWhere('last_name', 'like', $search)
//                                ->offset($page * $perPage)
//                                ->limit($perPage)
//                                ->orderBy('first_name', 'ASC')
//                                ->get();
//    }

    public function accountEdit($employeeId){
        $employee       = Employee::find($employeeId);
        $returnParams   = [];
        if(isset($employee->account()->first()->id)){
            $accessType   = $this->accessTypeToArray($employee->account()->first()->accessType()->get());
            $returnParams = [
                'account'       => $employee->account()->first(),
                'accessType'    => $accessType,
                'newAccount'    => '0'
            ];
        } else {
            $newAccount = new Account();
            $newAccount->employee_id = $employeeId;
            $returnParams = [
                'account'       => $newAccount,
                'message'       => 'Create employee account.',
                'newAccount'    => '1'
            ];
        }
        return view('employee.employeesAccountEdit')->with($returnParams);
    }

    public function accountUpdate(Request $request, $employeeId){
        $employee   = Employee::find($employeeId);
        $changePasswordStatus = $request->input('change_password_status');

        if(!isset($employee->id)) {
            return view('errors.404');
        }

        if(isset($employee->account()->first()->id)){

            if($changePasswordStatus == '1'){
                Validator::make($request->all(), Account::validationRule(), Account::validationMessage())->validate();
            } else {
                Validator::make($request->all(), Account::validationRuleNoPassword(), Account::validationMessageNoPassword())->validate();
            }

            $account = Account::find($employee->account()->first()->id);
            $account->username = $request->input('username');
            if($changePasswordStatus == '1'){
                $account->password = bcrypt($request->input('password'));
            }
            $account->active   = $request->input('active');
            $account->save();
            $this->insertAccessType($account, $request->input('account_access'));
            $this->removeAccessType($account, $request->input('account_access'));
            return redirect('/employee-account/' . $employee->id . '/edit')->with(['message' => 'Successfully Saved Changes!']);
        } else {
            Validator::make($request->all(), Account::validationRule(), Account::validationMessage())->validate();

            $this->validate($request, [
                'username' => 'required|unique:accounts,username',
            ]);

            $account = new Account;
            $account->username = $request->input('username');
            $account->password = bcrypt($request->input('password'));
            $account->active   = $request->input('active');
            $employee->account()->save($account);
            $this->insertAccessType($account, $request->input('account_access'));
            return redirect('/employee-account/' . $employee->id . '/edit')->with(['message' => 'Successfully created employee account!']);
        }

    }

    public function getChangePasswordCode($employee_id){
        $employee = Employee::find($employee_id);
        $code     = mt_rand (100000,999999);
        $employee->account->change_password_code = bcrypt($code);
        $employee->account->save();
        return response()->json(['code' => $code]);
    }

    public function accessTypeToArray($accessTypes){
        $returnParam = array();
        foreach ($accessTypes as $accessType) {
            array_push($returnParam, $accessType->access_type);
        }
        return $returnParam;
    }

    public function removeAccessType($account, $account_access){
        $account_access_old = $this->accessTypeToArray($account->accessType()->get());
        $oldRemove = array_diff($account_access_old, $account_access);
        foreach ($oldRemove as $old){
            $account->removeAccessType($old);
        }
    }

    public function insertAccessType($account, $account_access){
        $account_access_old = $this->accessTypeToArray($account->accessType()->get());
        $newAdded = array_diff($account_access, $account_access_old);
        foreach ($newAdded as $new){
            $account->addAccessType($new);
        }
    }

    public function validateDuplicate($firstName, $lastName, $id = 0){
        $returnVal = false;

        if($id <= 0){
            $employee = Employee::where(['first_name' => $firstName, 'last_name' => $lastName])->first();
        } else {
            $employee = Employee::where(['first_name' => $firstName, 'last_name' => $lastName, ['id', '!=', $id]])->first();
        }

        if(isset($employee->id)){
            $returnVal = true;
        }

        return $returnVal;
    }

    public function schedule(){
        return view('employee.employeeSchedule');
    }


    public function destroy($id)
    {
        //
    }
}
