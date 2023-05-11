<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function index(){
        $datas=Data::all();
        return view('data.index',compact('datas'));
    }

    public function create(){
        return view('data.create');
    }

    public function store(Request $req){
        Data::create([
            'name'=>$req->name,
            'description'=>$req->description
        ]);
        
        return redirect('/');
    }

    public function edit($id){
        $data=Data::find($id);
        return view('data.edit',compact('data'));
    }

    public function update(Request $req,$id){
        $data=Data::find($id);

        $data->update([
            "name" => $req->name,
            "description" => $req->description
        ]);
        
        return redirect('/');
    }

    public function destroy($id){
        Data::destroy($id);
        return redirect('/');
    }
}
