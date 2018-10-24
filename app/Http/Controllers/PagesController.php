<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index() {
      $title = "Welcome to Delta Chi at Valdosta State University";

      // calling scoped published() method in Post model
      $posts = Post::orderBy('created_at', 'desc')->published()->take(3);


      // One way to pass in the $title variable
      // return view('pages.index', compact('title'));

      // Second way to pass in the $title variable to the index view
      return view('pages.index')->with('title', $title)->with('posts', $posts);
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

    public function localHistory() {
      return view('pages.local-history');
    }

    public function scholarship() {
      return view('pages.scholarship');
    }

    public function campusInvolvement() {
      return view('pages.campus-involvement');
    }
}
