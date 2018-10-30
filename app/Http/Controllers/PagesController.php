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
      return view('pages.about.values')->with($data);
    }

    public function localHistory() {
      return view('pages.about.local-history');
    }

    public function scholarship() {
      return view('pages.about.scholarship');
    }

    public function campusInvolvement() {
      return view('pages.about.campus-involvement');
    }

    public function joshDykes() {
      return view('pages.philanthropy.josh-dykes');
    }

    public function theVFoundation() {
      return view('pages.philanthropy.the-v-foundation');
    }

    public function recruitmentLetter() {
      return view('pages.recruitment.letter-from-recruitment-chair');
    }

    public function ourRecruitment() {
      return view('pages.recruitment.our-recruitment');
    }

    public function whyJoin() {
      return view('pages.recruitment.why-join');
    }
}
