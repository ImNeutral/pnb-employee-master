<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee_id = $id;
        $returnParams   = [
            'monday'        => $this->getEmployeeSchedule($employee_id, 'monday'),
            'tuesday'       => $this->getEmployeeSchedule($employee_id, 'tuesday'),
            'wednesday'     => $this->getEmployeeSchedule($employee_id, 'wednesday'),
            'thursday'      => $this->getEmployeeSchedule($employee_id, 'thursday'),
            'friday'        => $this->getEmployeeSchedule($employee_id, 'friday'),
            'saturday'      => $this->getEmployeeSchedule($employee_id, 'saturday'),
            'sunday'        => $this->getEmployeeSchedule($employee_id, 'sunday'),
            'employee_id'    => $employee_id
        ];
        return view('employee.employeeSchedule')->with($returnParams);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee_id = $id;



        $returnParams   = [
            'monday'        => $this->getEmployeeSchedule($employee_id, 'monday'),
            'tuesday'       => $this->getEmployeeSchedule($employee_id, 'tuesday'),
            'wednesday'     => $this->getEmployeeSchedule($employee_id, 'wednesday'),
            'thursday'      => $this->getEmployeeSchedule($employee_id, 'thursday'),
            'friday'        => $this->getEmployeeSchedule($employee_id, 'friday'),
            'saturday'      => $this->getEmployeeSchedule($employee_id, 'saturday'),
            'sunday'        => $this->getEmployeeSchedule($employee_id, 'sunday'),
            'employee_id'    => $employee_id
        ];
        return view('employee.employeeScheduleEdit')->with($returnParams);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->editEmployeeSchedule($id, 'monday',      $request);
        $this->editEmployeeSchedule($id, 'tuesday',     $request);
        $this->editEmployeeSchedule($id, 'wednesday',   $request);
        $this->editEmployeeSchedule($id, 'thursday',    $request);
        $this->editEmployeeSchedule($id, 'friday',      $request);
        $this->editEmployeeSchedule($id, 'saturday',    $request);
        $this->editEmployeeSchedule($id, 'sunday',      $request);

        return redirect('/employee/schedule/' . $id . '/edit')->with(['message' => 'Successfully Saved Changes!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getEmployeeSchedule($employee_id, $dayName){
        $day         = Schedule::firstOrNew(['employee_id' => $employee_id, 'day' => $dayName]);
        return $day;
    }

    public function editEmployeeSchedule($employee_id, $dayName, $request){

        $day    = Schedule::where(['employee_id' => $employee_id, 'day' => $dayName])->first();

        if($day != null) {
            $day->day_morning_from      = $request->input( $this->getFullDayName($dayName, 'MorningFrom') );
            $day->day_morning_to        = $request->input( $this->getFullDayName($dayName, 'MorningTo') );
            $day->day_afternoon_from    = $request->input( $this->getFullDayName($dayName, 'AfternoonFrom') );
            $day->day_afternoon_to      = $request->input( $this->getFullDayName($dayName, 'AfternoonTo') );
            $day->save();
        } else {
            $dayNew = new Schedule;
            $dayNew->employee_id           = $employee_id;
            $dayNew->day                   = $dayName;
            $dayNew->day_morning_from      = $request->input( $this->getFullDayName($dayName, 'MorningFrom') );
            $dayNew->day_morning_to        = $request->input( $this->getFullDayName($dayName, 'MorningTo') );
            $dayNew->day_afternoon_from    = $request->input( $this->getFullDayName($dayName, 'AfternoonFrom') );
            $dayNew->day_afternoon_to      = $request->input( $this->getFullDayName($dayName, 'AfternoonTo') );
            $dayNew->save();
        }
    }

    function getFullDayName($dayName, $dayTimeName){
        return $dayName . $dayTimeName;
    }

    public function destroy($id)
    {
        //
    }
}
