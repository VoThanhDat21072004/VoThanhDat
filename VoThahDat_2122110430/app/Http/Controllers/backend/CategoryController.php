<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        return view("backend.category.index");
    }
    function edit()
    {
        return view("backend.category.edit");
    }
}
