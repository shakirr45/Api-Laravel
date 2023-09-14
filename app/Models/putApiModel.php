<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class putApiModel extends Model
{
    use HasFactory;
    public $table ="devices";
    public $timestamps = false;
}
