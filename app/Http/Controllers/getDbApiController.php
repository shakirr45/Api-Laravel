<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Db----->
use App\Models\Device;

class getDbApiController extends Controller
{
    //
    function list($id=null){
        // return Device::all();
        return $id?Device::find($id):Device::all();

    }
}
