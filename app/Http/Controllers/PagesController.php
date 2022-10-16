<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//any controller you create should extend the main Controller
class PagesController extends Controller
{
    //public meaning we can access this method or func outside this class
    public function index()
    {
        //   going to look in the pages folder of the views folder to get the index
        $title = 'Welcome To Laravel!';
        //  return view('pages.index', compact('title'));
        // with takes an arg of what we wanna call the varible in the view and the actual varible name. with is useful if you want to pass in multiple values as an array
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {

        $title = 'This is the About page';
        return view('pages.about')->with('title', $title);
    }

    //    this is for muli values
    public function services()
    {
        // this is an associative array with key value pairs
        $data = array(
            'title' => 'Services',
            'services' => [
                'Web Dev', 'Coding', 'SEO'
            ]
        );

        //   we can basically pass in multi variables this way
        return view('pages.services')->with($data);
    }
}
