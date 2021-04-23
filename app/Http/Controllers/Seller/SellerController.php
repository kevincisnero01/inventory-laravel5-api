<?php

namespace App\Http\Controllers\Seller;

use App\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SellerController extends ApiController
{

    public function index()
    {
        $vendedores = Seller::has('products')->get();
        return $this->showAll($vendedores);
    }

    public function show($id)
    {
        $vendedor = Seller::has('products')->findOrFail($id);
        return $this->showOne($vendedor,200);
    }

}
