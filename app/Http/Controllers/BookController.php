<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function getHome(){
        $books = Book::all();

        return view('home',compact('books'));
    }

    public function getHomeDetailById($id){
        $book = Book::find($id);

        return view('book-detail',compact('book'));
    }
}
