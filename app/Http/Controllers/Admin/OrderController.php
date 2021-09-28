<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(5);

        return view('layouts.admin.modules.order.index', compact('orders'));
    }

    public function detail($id)
    {
        $inforCustomer = Order::with('user')->findOrFail($id);
        $orderDetail = OrderDetail::where('order_id', $inforCustomer->id)->with('product')->firstOrFail();
        
        return view('layouts.admin.modules.order.detail', compact('inforCustomer', 'orderDetail'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        //Update
        if (in_array($request->status, [config('common.status.order')])) {
            $order->update([
                'status' => $request->status,
            ]);

            return response()->json([
                'success' => __('admin.notification.update_success'),
            ]);
        }

        return response()->json([
            'error' => __('admin.notification.errors'),
        ]);
    }
}
