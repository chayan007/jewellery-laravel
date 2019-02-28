<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Product;
use Carbon\Carbon;
use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Util\Str;

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

    public function addToOrder(Request $request)
    {
        //customer details added
        $customer = new Customer();
        $customer->name = $request->fname.' '.$request->lname;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address.' \n'.$request->city.' \n'.$request->zip;
        $customer->save();

        //order details added
        $orders = Order::where('user', Auth::user()->id)->get();
        foreach ($orders as $order)
        {
            $order->order = "Order Placed";
            $order->customer = Customer::where('email', $request->email)->firstOrFail()->id;
            $order->expected = Carbon::now()->addDays(7);
            $number = Str::random(8);
            $order->token = str_slug($number,'-');
            $order->save();
        }
        return redirect('/orders');
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
        return view('public.pages.orders', ['orders' => $orders]);
    }

    public function showCartToUser()
    {
        $orders = Order::where([
            ['order', 'In Cart'],
            ['user', Auth::user()->id]
        ])->get();
        return view('public.pages.cart', ['orders' => $orders]);
    }

    public function updateCart($id, Request $request)
    {
        $order = Order::where('id', $id)->first();
        $order->quantity = $request->quantity;
        $order->save();
        return back()->with('status', 'Your cart has been updated !');
    }

    public function showCheckout()
    {
        $orders = Order::where([
            ['order', 'In Cart'],
            ['user', Auth::user()->id]
        ])->get();
        return view('public.pages.checkout', ['orders' => $orders]);
    }

}
