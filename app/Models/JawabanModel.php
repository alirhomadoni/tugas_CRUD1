<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

Class JawabanModel{
    public static function get_all(){
        $jawaban=DB::table('jawaban')->get();
        return $jawaban;
    }
    public static function save($data){
        $now= date_create()->format('Y-m-d H:i:s');
        if(!(isset($data['created_at']))){
            $data['created_at']=$now;
        }else{
            $data['updated_at']=$now;

        }
        $new_jawaban=DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }
}