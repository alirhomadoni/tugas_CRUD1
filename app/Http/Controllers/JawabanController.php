<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
class JawabanController extends Controller
{
    public function index(){
        $jawaban=JawabanModel::get_all();

        //dd($filter);
        return view('QnA.jawaban',compact('jawaban'));
    }

    
    public function store(Request $request){
        $data=$request->all();
        unset($data["_token"]);
        $url = $_SERVER["REQUEST_URI"];
        $p_id = str_replace("/jawaban/","", $url);
        
        $jawaban=JawabanModel::save($data);
        //dd($data);
        if ($jawaban){
             return redirect('/temp');
        }
    }
}
