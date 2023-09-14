<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
///======>Db
use App\Models\searchApiModel;
class searchApiController extends Controller
{
    //
    function search($name){
        // return searchApiModel::where("name",$name)->get(); //find with full name

        return searchApiModel::where("name","like","%".$name."%")->get(); //find with letter


    }
}
