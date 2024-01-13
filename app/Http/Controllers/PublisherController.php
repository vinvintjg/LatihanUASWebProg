<?php

namespace App\Http\Controllers;
use App\Models\Publisher;
use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //

    public function getPublisher(){
        $publishers = Publisher::all();

        return view('publisher',compact('publishers'));
    }

    public function getBookByPublisher($id){
        $publisher = Publisher::find($id);
        $books = $publisher->books;

        return view('publisher-detail',compact('publisher', 'books'));
    }

    
}
