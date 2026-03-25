<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessiionControler extends Controller
{
    public function index(Request $request){
        $data =session()->all();
        // if($request->session()->has('name')){
        //     $data =$request->session()->get('name');
        // }else{
        //     echo "no session available ";
        // };
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    public function store(Request $request){
        session(['name'=>'first_session']);
        $request->session()->put('role','admin');
        
        session()->increment('count');
        $request->session()->regenerate();
        // $request->session()->flash('status', 'Task was successful!');

        return redirect("/");
        
    }
    public function delete(Request $request){
        // $request->session()->forget('name');
        // session()->flush();
        $request->session()->invalidate();

        return redirect("/");
    }
}
