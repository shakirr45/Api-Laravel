<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
///======>Db
use App\Models\deleteApiModele;

class deleteApiController extends Controller
{
    //
    function delete($id){
        $result = deleteApiModele::find($id);
        $data = $result->delete();

        if($data){
            return ["result" =>"delete done"];
        }else{
            return ["result" =>"delete not done"];
        }

    }
}
