<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\HairStylist;
use App\Model\Reservation;



class ReservationController extends Controller
{
    public function index(Request $request){
    	$query = null;
    	$name = null;
    	if($request ->has('name')){
    		$name = $request->name;
    		$query = Reservation::where('name','like',"%$name%")->orderBy('reservation_date','desc');
    	}
    	if($query==null){
    		$reservation = Reservation::orderBy('reservation_date','desc')->paginate(10);
    	}else{
    		$reservation = $query->paginate(10);
    	}
    	return view('admin.reservation.index',['reservation'=>$reservation,'name'=>$name]);
    }
    public function updateStatus(Request $request){
    	if($request->id != null){
    		$model = Reservation::find($request->id);
    		$model->status = $request->status;
    		$model->save();
    	}
    	return redirect(route('list_reservation'));

    }
    public function revenueManagement(Request $request){
    	$date = getdate();
    	$month = $date['mon'];
    	$totalRevenue = null;
    	$prices  = [];
    	$paymentAll = [];
    	if($request->has('month')){
    		$month = $request->month;
    	}

    	//all
    	$totalOrders = Reservation::count();
    	$TotalNumberOfPaidOrders = Reservation::where('status','=','Đã Thanh Toán')->count();
    	$paidOrders = Reservation::where('status','=','Đã Thanh Toán')->get();
    	foreach ($paidOrders as $paidOrder) {
    		$payment = $paidOrder->service->price;
    		array_push($paymentAll,$payment);
    	}
    	$totalRevenue = array_sum($paymentAll);


    	//in month
    	$totalOrdersInMonth = Reservation::whereMonth('reservation_date', '=', "$month")->count();
    	$TotalNumberOfPaidOrdersInMonth = Reservation::whereMonth('reservation_date', '=', "$month")->where('status','=','Đã Thanh Toán')->count();
    	$paidOrdersInMonth = Reservation::whereMonth('reservation_date', '=', "$month")->where('status','=','Đã Thanh Toán')->get();
    	foreach ($paidOrdersInMonth as $paidOrderInMonth) {
    		$price = $paidOrderInMonth->service->price;
    		array_push($prices,$price);
    	}
    	$totalRevenueInMonth = array_sum($prices);

    	 

    	return view('admin.revenueManagement.index',compact('TotalNumberOfPaidOrders','totalOrders','month','totalRevenue','totalRevenueInMonth','TotalNumberOfPaidOrdersInMonth','totalOrdersInMonth'));
    }

}
