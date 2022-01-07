<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function product()
    {
        return view('seller.add_product');
    }

    public function upload_product(Request $request)
    {
        $data = new Product();

        $image = $request->file;
        $imagename = time() . "." . $image->getClientOriginalExtension();
        $request->file->move('product_image', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }
    public function delete_product($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function update_product($id)
    {
        $data = Product::find($id);
        return view('seller.update_product', compact('data'));
    }

    public function update_product_save(Request $request, $id)
    {
        $data = Product::find($id);

        $image = $request->file;
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $request->file->move('product_image', $imagename);

            $data->image = $imagename;
        }
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->des;
        $data->quantity = $request->quantity;

        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function show_orders()
    {
        $orders = Order::all();
        return view('seller.show_orders', compact('orders'));
    }
    public function update_status($id)
    {
        $order = Order::find($id);
        $order->status = "Delivered";
        $order->save();

        return redirect()->back();
    }
}
