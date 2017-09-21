<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getAllYears(){
        return Order::select( DB::raw('DISTINCT EXTRACT(YEAR FROM created_at) as year') )->orderBy('year', 'DESC')->get();
    }

    public function getAllYearsData(){
        $years      = $this->getAllYears();
        $yearsData  = array();

        foreach ($years as $year) {
            $yearData = Order::select( DB::raw('SUM(total) as total') )
                        ->where( DB::raw('EXTRACT(YEAR FROM created_at)'), $year['year'])
                        ->where('status', 'Paid')
                        ->first();
            array_push($yearsData, array($year , $yearData) );
        }

        return response()->json(['yearsData' => $yearsData]);
    }

    public function getAllMonthsData() {
        $year = $_GET['year'];
        $months = [1,2,3,4,5,6,7,8,9,10,11,12];
        $monthsData  = array();

        foreach ($months as $month) {
            $monthData = Order::select( DB::raw('SUM(total) as total') )
                ->where( DB::raw('EXTRACT(YEAR FROM created_at)'), $year)
                ->where( DB::raw('EXTRACT(MONTH FROM created_at)'), $month)
                ->where('status', 'Paid')
                ->first();
            $monthData['total'] = empty($monthData['total'])? '0' : $monthData['total'];
            array_push($monthsData, array($month , $monthData) );
        }
        return response()->json(['monthsData' => $monthsData]);
    }

    public function getAllDaysData() {
        $year   = $_GET['year'];
        $month  = $_GET['month'];
        $months = [31,( ($year%4 > 0)? 28: 29 ),31,30,31,30,31,31,30,31,30,31];
        $days   = $months[$month - 1];
        $daysData  = array();

        for ($day = 1; $day <= $days; $day++) {
            $dayData = Order::select( DB::raw('SUM(total) as total') )
                ->where( DB::raw('EXTRACT(YEAR FROM created_at)'), $year)
                ->where( DB::raw('EXTRACT(MONTH FROM created_at)'), $month)
                ->where( DB::raw('EXTRACT(DAY FROM created_at)'), $day)
                ->where('status', 'Paid')
                ->first();
            $dayData['total'] = empty($dayData['total'])? '0' : $dayData['total'];
            array_push($daysData, array($day , $dayData) );
        }
        return response()->json(['daysData' => $daysData, 'days' => $days]);
    }


    /**  Products */

    public function topProducts() {
        return view('sales.top-products')->with(['years' => $this->getAllYears()]);
    }

    public function topProductsForYear(){
        $months = $this->monthsDataForYear($_GET['year']);
        $ordersIdString = ['', '', '', '', '', '', '', '', '', '', '', ''];

        foreach ($months as $month) {
            $orders = $month[1];
            $monthHasContent = 0;
            foreach ($orders as $order) {
                $ordersIdString[$month[0]-1] .= $order->id . ',';
                $monthHasContent = 1;
            }
            if($monthHasContent) {
                $ordersIdString[$month[0]-1] = rtrim($ordersIdString[$month[0]-1], ',');
            } else {
                $ordersIdString[$month[0]-1] = null;
            }
        }

        $allOrdersIdString = explode(',',implode(array_filter($ordersIdString), ','));
        $orderItemsName = OrderItem::select('name')
            ->distinct('name')
            ->whereIn('order_id', $allOrdersIdString)
            ->groupBy('name')
            ->orderBy(DB::raw('sum(total)') , 'DESC')
            ->get();

        $topProducts = [[]];
        $counter = 0;
        foreach ($orderItemsName as $orderItemName) {
            $topProducts[0][$counter] = $orderItemName->name;
            $topProducts[1][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[0]);
            $topProducts[2][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[1]);
            $topProducts[3][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[2]);
            $topProducts[4][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[3]);
            $topProducts[5][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[4]);
            $topProducts[6][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[5]);
            $topProducts[7][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[6]);
            $topProducts[8][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[7]);
            $topProducts[9][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[8]);
            $topProducts[10][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[9]);
            $topProducts[11][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[10]);
            $topProducts[12][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString[11]);
            $counter++;
        }

        return response()->json(['topProductsOnYear' => $topProducts]);
    }

    public function topProductsForMonth(){
        $year = $_GET['year'];
        $month = $_GET['month'];

        $topProductsOnMonth = $this->productsDataForMonth( $year, $month );
        $ordersIdString = '';
        $monthHasContent = 0;
        foreach ($topProductsOnMonth as $order) {
            $ordersIdString .= $order->id . ',';
            $monthHasContent = 1;
        }
        if($monthHasContent) {
            $ordersIdString = rtrim($ordersIdString, ',');
        } else {
            $ordersIdString = null;
        }

        $allOrdersIdString = explode(',', $ordersIdString);
        $orderItemsName = OrderItem::select('name')
            ->distinct('name')
            ->whereIn('order_id', $allOrdersIdString)
            ->groupBy('name')
            ->orderBy(DB::raw('sum(total)') , 'DESC')
            ->get();

        $topProducts = [[]];
        $counter = 0;
        foreach ($orderItemsName as $orderItemName) {
            $topProducts[0][$counter] = $orderItemName->name;
            $topProducts[1][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString);
            $counter++;
        }

        return response()->json(['topProductsOnMonth' => $topProducts]);
    }

    public function topProductsForDay(){
        $year = $_GET['year'];
        $month = $_GET['month'];
        $day = $_GET['day'];

        $topProductsOnDay = $this->productsDataForDay( $year, $month, $day );
        $ordersIdString = '';
        $dayHasContent = 0;

        foreach ($topProductsOnDay as $order) {
            $ordersIdString .= $order->id . ',';
            $dayHasContent = 1;
        }
        if($dayHasContent) {
            $ordersIdString = rtrim($ordersIdString, ',');
        } else {
            $ordersIdString = null;
        }

        $allOrdersIdString = explode(',', $ordersIdString);
        $orderItemsName = OrderItem::select('name')
            ->distinct('name')
            ->whereIn('order_id', $allOrdersIdString)
            ->groupBy('name')
            ->orderBy(DB::raw('sum(total)') , 'DESC')
            ->get();

        $topProducts = [[]];
        $counter = 0;
        foreach ($orderItemsName as $orderItemName) {
            $topProducts[0][$counter] = $orderItemName->name;
            $topProducts[1][$counter] = $this->monthSalesOfProduct($orderItemName->name, $ordersIdString);
            $counter++;
        }

        return response()->json(['topProductsOnDay' => $topProducts]);
    }

    public function monthSalesOfProduct($name, $allOrdersIdString) {
        $allOrdersIdString = explode(',', $allOrdersIdString);

        $sales = OrderItem::select( DB::raw('SUM(total) as total') )
            ->distinct('name')
            ->whereIn('order_id', $allOrdersIdString)
            ->where('name', $name)
            ->first();
        if($sales->total > 0) {
            return $sales->total;
        } else {
            return 0;
        }
    }

    public function monthsDataForYear($year){
        $months = [1,2,3,4,5,6,7,8,9,10,11,12];
        $monthsData  = array();

        foreach ($months as $month) {
            $monthData = Order::where( DB::raw('EXTRACT(YEAR FROM created_at)'), $year)
                ->where( DB::raw('EXTRACT(MONTH FROM created_at)'), $month)
                ->where('status', 'Paid')
                ->get();
            array_push($monthsData, array($month , $monthData) );
        }
        return $monthsData;
    }

    public function productsDataForMonth($year, $month){

        $productMonthData = Order::where( DB::raw('EXTRACT(YEAR FROM created_at)'), $year)
            ->where( DB::raw('EXTRACT(MONTH FROM created_at)'), $month)
            ->where('status', 'Paid')
            ->get();

        return $productMonthData;
    }

    public function productsDataForDay($year, $month, $day){

        $productMonthData = Order::where( DB::raw('EXTRACT(YEAR FROM created_at)'), $year)
            ->where( DB::raw('EXTRACT(MONTH FROM created_at)'), $month)
            ->where( DB::raw('EXTRACT(DAY FROM created_at)'), $day)
            ->where('status', 'Paid')
            ->get();

        return $productMonthData;
    }

    public function ordersForDay(){
        $year = $_GET['year'];
        $month = $_GET['month'];
        $day = $_GET['day'];

        $ordersForDay = $this->productsDataForDay($year, $month, $day);

        $returnParams = [];
        $counter1     = 0;
//
        foreach ($ordersForDay as $orderForDay) {
            $orderItems = $orderForDay->orderItems()->get();
            foreach ($orderItems as $orderItem) {
                $returnParams[$counter1][0] = $orderItem->order_id;
                $returnParams[$counter1][1] = $orderForDay->table;
                $returnParams[$counter1][2] = date_format(date_create($orderForDay->created_at), 'h:i a');
                $returnParams[$counter1][3] = $orderForDay->type;
                $returnParams[$counter1][4] = $orderItem->name;
                $returnParams[$counter1][5] = $orderItem->price;
                $returnParams[$counter1][6] = $orderItem->qty;
                $returnParams[$counter1][7] = $orderItem->total;
                $counter1++;
            }
        }

        return response()->json(['ordersForDay' => $returnParams]);
    }

}
