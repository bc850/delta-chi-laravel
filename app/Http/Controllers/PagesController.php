<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
      $title = "Welcome to Delta Chi at Valdosta State University";

      // One way to pass in the $title variable
      // return view('pages.index', compact('title'));

      // Second way to pass in the $title variable to the index view
      return view('pages.index')->with('title', $title);
    }

    public function values() {
      $data = array(
        'title' => "Values",
        'values' => [
            'Promoting Friendship',
            'Developing Character',
            'Advancing Justice',
            'Assisting in the Aquisition of a Sound Education'
          ]
      );
      return view('pages.values')->with($data);
    }
}
