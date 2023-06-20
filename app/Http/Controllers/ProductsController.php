<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function create(Request $request)
    {
        foreach($request->name as $key => $name){
            $item = new Products();
            $item->name = $request->name[$key];
            $item->quantity = $request->quantity[$key];
            $item->purchasePrice = $request->purchasePrice[$key];
            $item->salePrice = $request->salePrice[$key];
            $item->save();

            return back();
        }
    }
}
