<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function test(){
        echo "works";
    }

    function test2(){
        echo "test 2 works";
    }

    private function validateForm(Request $request){
        $rules = ['username' => 'Required | Between:4,10 | Alpha',
                  'password' => 'Required | Between:4,10'];
        $this->validate($request, $rules);
    }

}
