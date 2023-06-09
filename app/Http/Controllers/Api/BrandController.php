<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\BrandCollection;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        return new BrandCollection(Brand::all());
    }
    public function showById($id){
        $brand=Brand::where('id',$id)->first();
        return $brand;

    }
}
