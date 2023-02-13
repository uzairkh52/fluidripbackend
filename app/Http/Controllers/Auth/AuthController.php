<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;

class AuthController extends Controller
{
    public function createClass (){
        $data = Category::all();
        $tagsData = Tag::all();
        return view ("auth.create", ['collection' => $tagsData, ]);

    }
}