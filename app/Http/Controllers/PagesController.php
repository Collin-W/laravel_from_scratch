<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//any controller you create should extend the main Controller
class PagesController extends Controller
{
    //public meaning we can access this method or func outside this class
public function index(){
 //   going to look in the pages folder of the views folder to get the index
    return view('pages.index');
}
public function about(){
    //   going to look in the pages folder of the views folder to get the index
       return view('pages.about');
   }
public function services(){
    //   going to look in the pages folder of the views folder to get the index
       return view('pages.services');
   }
}
