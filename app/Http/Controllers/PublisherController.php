<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index (){
        $publisher = publisher::all();
        return view ('publisher', compact('publisher'));
    }
}
