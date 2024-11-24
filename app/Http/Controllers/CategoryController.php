<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show (Category $category)
    {
        return view('personas', [
        //Pasamos Las categorías tambien para mostrarlo en el filtro
        'category' => $category,
        //Precargamos las categorías seleccionando en orden descendiente y paginado
        'personas' => $category->personas()->with('category')->latest()->paginate()
        ]);
    }
}