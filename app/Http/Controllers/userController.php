<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class userController extends Controller
{
    public function register(Request $request)
    {
        $insert["name"] = $request["name"];
        $insert["email"] = $request["email"];
        $insert["contact"] = $request["contact"];
        $insert["password"] = bcrypt($request["password"]);
        // dd($insert);

        $status = DB::table("users")->insert($insert);
        if ($status) {
            $key = "Success";
            $msg = "Successful registration";
        } else {
            $key = "Error";
            $msg = "Error in registration";
        }
        return redirect()->back()->with($key, $msg);
    }
}
