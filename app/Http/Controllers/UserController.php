<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function home()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            $products = Product::all();
            return view('seller.home', compact('products'));
        } else {
            $products = Product::paginate(4);
            $user = auth()->user();
            $count = Cart::where('user_id', $user->id)->count();
            return view('customer.home', compact('products', 'count'));
        }
    }

    public function index()
    {

        // if any user login recall redirect homepage
        if (Auth::id()) {
            return redirect('home');
        } else {
            $products = Product::paginate(4);
            return view('customer.home', compact('products'));
        }
    }

    public function product_page($id)
    {
        $product = Product::find($id);
        $user = auth()->user();
        $count = Cart::where('user_id', $user->id)->count();
        return view('customer.product_page', compact('product', 'count'));
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $product = Product::find($id);

            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->product_id = $product->id;
            $product->s_quantity = $request->quantity;
            $cart->save();
            $product->save();
            return redirect('home')->with('message', 'Product Added Successfully');
        } else {
            return redirect('login');
        }
    }

    public function showcart()
    {
        $user = auth()->user();
        $count = Cart::where('user_id', $user->id)->count();

        // $carts = Cart::where('user_id', $user->id)->get();
        $carts = Cart::with('product')->get();

        return view('customer.showcart', compact('count', 'carts'));
    }

    public function deletecart($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function confirmorder(Request $request)
    {
        $user = auth()->user();
        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;

        foreach ($request->productname as $key => $productname) {
            $order = new Order();
            $order->product_name = $request->productname[$key];
            $order->price = $request->price[$key];
            $order->quantity = $request->quantity[$key];
            $order->name = $name;
            $order->phone = $phone;
            $order->address = $address;
            $order->status = "Not Delivered";
            $order->save();
        }
        DB::table('carts')->where('user_id', $user->id)->delete();
        return redirect()->back()->with('message', 'Product Ordered Successfully');
    }

}
