<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Product;
use Carbon\Carbon;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function addToCart($id, Request $request)
    {
        $user = Auth::user()->id;
        $product = Product::where('id', $id)->firstOrFail()->id;
        $order = new Order();
        $order->status = 1;
        $order->quantity = $request->quantity;
        $order->product = $product;
        $order->user = $user;
        $order->save();
        return back()->with('status', 'Product has been added to Cart !');
    }

    public function addCustomer(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();
        return view();
    }

    public function addToOrder(Request $request, $id)
    {
        $orders = Order::where('user', $id)->get();
        foreach ($orders as $order)
        {
            $order->order = "Order Placed";
            $order->customer = Customer::where('email', $request->email)->firstOrFail()->id;
            $order->expected = Carbon::now()->addDays(7);
            $number = $request->name.' '.str(rand(0,255));
            $order->token = str_slug($number,'-');
            $order->save();
        }
        return back();
    }

    public function showOrders()
    {
        $orders = Order::where('order', 'Order Placed')->paginate(20);
        return view('admin.Orders', ['orders' => $orders]);
    }

    public function showOrderReject()
    {
        $orders = Order::where('order', 'Completed')->paginate(20);
        return view('admin.OrderReject', ['orders' => $orders]);
    }

    public function showOrderToUser()
    {
        $orders = Order::where([
            ['order', 'Order Placed'],
            ['user', Auth::user()->id]
        ])->get();
        return view('orders', ['orders' => $orders]);
    }

    public function showCartToUser()
    {
        $orders = Order::where([
            ['order', 'In Cart'],
            ['user', Auth::user()->id]
        ])->get();
        return view('orders', ['orders' => $orders]);
    }

}
