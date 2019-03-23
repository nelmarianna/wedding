<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    public $timestamps = false;
    //protected $fillable = ['firstName', 'lastName'];
    public static function insertData($data){

        DB::table('guests')->insert($data);
     //}
  }
}
