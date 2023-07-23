<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;


class DashboardController extends Controller

{
    public function index()
    {
        $categories = Category::all();
        $total_categories = count($categories);

        $items = Item::all();
        $total_items = count($items);

//        $orders = Order::all();
//        $total_orders = count($orders);
//
//        $amounts = [];
//        foreach ($orders as $order) {
//            $amounts[] = $order->amount;
//        }
//        $total_amount = array_sum($amounts);

        return view('admin.dashboard.dashboard', [
            'categories' => $categories,
            'total_categories' => $total_categories,
            'items' => $items,
            'total_items' => $total_items,
//            'orders' => $orders,
//            'total_orders' => $total_orders,
//            'amounts' => $amounts,
//            'total_amount' => $total_amount,
        ]);
    }
}
