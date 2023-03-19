<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    // get post
    public function index() {
        return 'Page of articles';
    }


    // create post

    public function create() {
        return 'Page for create post';
    }

    //update post
    public function update() {
        return 'Articles are updated';
    }

    //delete post
    public function delete() {
        return 'Article are deleted (((';
    }

    public function show() {
        return 'Hey Looking for something';
    }
}
