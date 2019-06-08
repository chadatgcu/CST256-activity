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

}
