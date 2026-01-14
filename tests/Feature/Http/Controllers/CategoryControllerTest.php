<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // Vraćamo običan tekst ili prazan view samo da test dobije status 200
        return response('Lista kategorija', 200);
    }
}
