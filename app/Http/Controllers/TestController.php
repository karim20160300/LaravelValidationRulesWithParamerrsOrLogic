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
}
