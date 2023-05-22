<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return view('order-form');
    }
    public function store(Request $request)
    {
        $order = new Order;
        $order->name = $request->name;
        $order->address = $request->address;
        $order->combo = $request->combo;
        $order->payment = $request->payment;
        $order->save();
        return redirect('order-form')->with('status', 'Pedido foi enviado com sucesso!');
    }
    public function view(){
        $orders = DB::table('orders')->get();

        return view('layouts.pedidos',['orders' => $orders]);
    }
}
