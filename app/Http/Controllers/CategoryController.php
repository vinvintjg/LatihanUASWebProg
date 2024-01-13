<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\BookCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function getCategory($id){
        $category = Category::find($id);
        $books = $category->books;

        return view('category', compact('category', 'books'));
    }
}
