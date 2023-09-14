<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//====>DB=====>>
use App\Models\PostModel;

class postApiController extends Controller
{
    
    function add(Request $req){
        // return ["result"=> "done"];

        $device = new PostModel;
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result = $device->save();

        if($result){
        return ["its"=> "Data has been saved"];
        }
        else{
        return ["its"=> "Operation Faild"];
        }

    }


}
