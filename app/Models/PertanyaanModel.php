<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

Class PertanyaanModel{
    public static function get_all(){
        $pertanyaan=DB::table('pertanyaan')->get();
        return $pertanyaan;
    }
    public static function save($data){
        $now= date_create()->format('Y-m-d H:i:s');
      
        if(!(isset($data['created_at']))){
            $data['created_at']=$now;
        }else{
            $data['updated_at']=$now;

        }

        $new_pertanyaan=DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }
    public static function find_by_id($id){
        $pertanyaan=DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }
    public static function update($id, $request){
        //dd($request);
        $now= date_create()->format('Y-m-d H:i:s');
        $pertanyaan=DB::table('pertanyaan')
                    ->where('id',$id)
                    ->update([
                        'judul'=> $request['judul'],
                        'isi' => $request['isi'],
                        'updated_at'=>$now
                    ]);

    }
    public static function destroy($id){
        $deletedjawaban= DB::table('jawaban')
                        ->where('pertanyaan_id',$id)
                        ->delete();
         $deletedpertanyaan= DB::table('pertanyaan')
                        ->where('id',$id)
                        ->delete();
            
        return $deletedjawaban;
        return $deletedpertanyaan;

    }

}