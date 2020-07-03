<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan=PertanyaanModel::get_all();
        //dd($url);
        //dd($items);
        return view('QnA.index',compact('pertanyaan'));
    }

    public function create(){
         return view('QnA.form');
    }
    public function store(Request $request){
        $data=$request->all();
        unset($data["_token"]);
        
        // $pertanyaan=PertanyaanModel::save($data);
        // if ($pertanyaan){
        //     return redirect('/pertanyaan');
        // }

    }
}
