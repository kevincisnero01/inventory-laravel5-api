<?php

namespace App\Http\Controllers\Seller;

use App\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{

    public function index()
    {
        $vendedores = Seller::has('products')->get();
        return response()->json(['data' => $vendedores],200);
    }

    public function show($id)
    {
        $vendedor = Seller::has('products')->findOrFail($id);
        return response()->json(['data' => $vendedor],200);
    }

}
