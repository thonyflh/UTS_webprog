<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index (){
        $Book = Books::all();
        return view ('home', compact('Book'));
    }
    public function bookdetail($id){
        $BookDetail = Books::all()->where('id',$id);
        return view ('detail', compact('BookDetail'));
    }
}
