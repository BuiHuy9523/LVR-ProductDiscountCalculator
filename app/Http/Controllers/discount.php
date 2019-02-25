<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class discount extends Controller
{
    public function amount(Request $request)
    {
        $product = $request->Product;
        $list = $request->List;
        $discount = $request->Discount;
        $discount_amount = $list * $discount * 0.1;
        $price = $discount_amount - $list;
        return view('display',compact('discount_amount','list','discount','price','product'));
    }

    public function list(){
        return view('list');
    }
}
