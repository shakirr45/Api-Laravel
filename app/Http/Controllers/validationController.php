<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Validaton link==>
use Validator;
//db==>
use App\Models\validationModel;


class validationController extends Controller
{
    //
    function testData(Request $req){
        $rules = array(
            "member_id"=>"required | max:4",
            "name"=>"required"

        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            // return $validator->errors();
            return response()->json($validator->errors(), 401);
        }else{
        // return ["a"=>"x"];
         $device = new validationModel;
         $device->name=$req->name;
         $device->member_id=$req->member_id;
         $data = $device->save();
         if($data){
            return ["Result"=> "Data has been Saved"];
         }
         return ["Result"=> "Operation falid"];
        }
    }
}
