<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//======DB -=====>
use App\Models\putApiModel;

class putApiController extends Controller
{
    //
    function update(Request $req){
        $device = putApiModel::find($req->id);
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $request = $device->save();

        if($request){
            return ["Result"=>"Data Inserted"];
        }
        else{
            return ["Result"=>"Data Not Inserted"];

        }


    }

}
