<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

use App\User;
use Hash;
use Validator;
use Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('index')->with( 'orders', $orders );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();

        $order->no_meja = Input::get('no_meja');
        $order->no_pesanan = Input::get('no_pesanan');
		$order->makanan = Input::get('makanan');
		$order->minuman = Input::get('minuman');
        $order->tanggal = Input::get('tanggal');
        $order->product_id = Input::get('product_id');
        $order->total = Input::get('total');
        $order->order_status = Input::get('order_status');

        if($order->save())
        {
            Session::flash('message','Order was successfully created');
            Session::flash('m-class','alert-success');
            return redirect('order');
        }
        else
        {
            Session::flash('message','Data is not saved');
            Session::flash('m-class','alert-danger');
            return redirect('order/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('edit')->with('order', $order);
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
        $order = Order::find($id);

        $order->no_meja = Input::get('no_meja');
        $order->no_pesanan = Input::get('no_pesanan');
        $order->makanan = Input::get('makanan');
		$order->minuman = Input::get('minuman');
        $order->tanggal = Input::get('tanggal');
        $order->product_id = Input::get('product_id');
        $order->total = Input::get('total');
        $order->order_status = Input::get('order_status');

        if($order->save())
        {
            Session::flash('message','Order was successfully updated');
            Session::flash('m-class','alert-success');
            return redirect('order');
        }
        else
        {
            Session::flash('message','Data is not saved');
            Session::flash('m-class','alert-danger');
            return redirect('order/create');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();

        Session::flash('message','Order was successfully deleted');
        Session::flash('m-class','alert-success');
        return redirect('order');
    }

    //UPDATE Password
    public function password(){
        return View('password');
    }
}
