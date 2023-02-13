<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\web\WebUser;

class WebAuthController extends Controller
{
    public function register(Request $request) {
        $request->validate(
            [
             'name' => ['required', 'string', 'max:100'],
             'email' => ['required', 'email'],
             'password' => ['required', 'string'],
             'c_password' => ['required', 'string', 'same:password'],
            ]
        );
        if ($request-> fails()) {
            $response = [
                'success' => false,
                'message' => $request-> errors(),
            ];
            return response()->json($response, 400);
        }
        $input = $request->all();
        $input ['password'] = bcrypt($input['password']);
        $user = WebUser::create($input);
        $success ['token'] = WebUser
    }
}