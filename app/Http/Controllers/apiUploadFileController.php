<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class apiUploadFileController extends Controller
{
    //

    function uploadData(Request $req){
        // return $req->file('file')->store('apiDocs');

        //another way
        $result =  $req->file('file')->store('apiDocs');
        return ['result'=>$result];
    }
}
