<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    function index()
    {
        return view("backend.brand.index");
    }
    function edit()
    {
        return view("backend.brand.edit");
    }
}
