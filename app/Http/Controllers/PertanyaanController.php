<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

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
        
        $pertanyaan=PertanyaanModel::save($data);
        if ($pertanyaan){
             return redirect('/pertanyaan');
        }
       
    }
    public function show($id){
        $pertanyaan=PertanyaanModel::find_by_id($id);
        $jawaban=JawabanModel::get_all();
        //dd($jawaban,$pertanyaan);
        
        return  view('QnA.show',compact('pertanyaan','jawaban'));
    }
    public function edit($id){
        $pertanyaan=PertanyaanModel::find_by_id($id);
        //dd($pertanyaan);
        return view('QnA.edit',compact('pertanyaan'));
    }
    public function update($id, Request $request){
        $pertanyaan=PertanyaanModel::update($id,$request->all());
        return redirect('/pertanyaan');
    }
    public function destroy($id){
        $delete=PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }


}
