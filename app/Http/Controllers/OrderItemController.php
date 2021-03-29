<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OrderItem;

class OrderItemController extends Controller
{
    public function index()
    {
        return OrderItem::all();
    }

    public function store(Request $request)
    {
        
            return OrderItem::create($request->all());
    }

    public function show($schedule)
    {
        //show a post
        return OrderItem::find($orderitem);
    }

    public function update(Request $request, $orderitem)
    {
        //update a post

      $orderitem = OrderItem::find($orderitem);
      $orderitem->update($request->all());

      return $orderitem;
    }

    public function destroy($orderitem)
    {
        return OrderItem::destroy($orderitem);
    }

}
