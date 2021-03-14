<?php

namespace App\Http\Controllers;

use App\Review;
use App\Generic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller {

    public function home() {
        $generics = Generic::all();
        return view('home', ['generics' => $generics]);
    }

    public function about() {
        return view('about');
    }

    public function review() {
        $reviews = new Review();
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request) {
        $request->validate([
            'email' => 'required|min:4|max:50',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:300',
        ]);
        $review = new Review();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }

    public function search(Request $request) {
        $search = $request->search;
//        dd($search);
        // надо добавить валидацию
        return view('search');
    }
}
