<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class makeFirstApiController extends Controller
{
    //
    function getData(){
        return ["name"=>"SHAKIR","email"=>"shakir@gmail.com", "address"=>"Dhaka"];
    }
}
