<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\web\WebUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class WebUserController extends Controller
{
    function ShowUserClass () {
        return (
            WebUser::all()
        );
    }

    function RegisterClass (Request $request) {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required | string |',
            'last_name' => 'required | string',
            'email' => 'required | string',
            'phone' => 'required | int ',
            'password' => 'required | string',
        ]);
        if ($validator-> fails()) {
            return(response(
                ["errors"=> $validator->errors()->all()],402
            ));
        }
        // return ("test");
        // return $req->input();
        $webuser = new WebUser;
        $webuser->first_name=$request->first_name;
        $webuser->last_name=$request->last_name;
        $webuser->email=$request->email; 
        $webuser->phone=$request->phone; 
        $webuser->password=Hash::make($request->password);

        // $user= WebUser::where('email', $request->email)->first();
        
        // $token = $user->createToken('my-app-token')->plainTextToken;
        // $response = [
        //     'user' => $user,
        //     'token' => $token
        // ];
        // $request->headers->add([
        //     'accept' => 'application/json',
        // ]);
        // return response($response, 201);
        
        $result = $webuser->save();
        
        if($result) {
            return response([
                'message' => ['user has been registered']
            ], 404);
        } else {
            return response(201);
        }
    }
    // login 
    function LoginClass(Request $request)
    {
        $loginUser = WebUser::where('email', $request->email)->first();
        $user= WebUser::where('email', $request->emtokenail)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        }
        $token = $user->createToken('my-app-token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
    
        return response($response, 201);
    }
    
}