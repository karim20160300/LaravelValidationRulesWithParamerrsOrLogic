<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\testRequest;
class TestController extends Controller
{
    //
    public function test(testRequest $request){
        return $request->all();
    }
    // public function test(Request $request){
    //     // $test = 'App\User';
    //     // $user = $test::find(1);
    //     // return $user;
    //     $test = 'App\\'.$request->model;
    //     $user = $test::find(1);
    //     return $user;
    // }
}
