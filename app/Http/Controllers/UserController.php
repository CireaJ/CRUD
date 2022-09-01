<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{

    //
    public function show(){
        return view('layouts.landingpage.landingpage', [
            'employees'=> User::all()
        ]);
    }

    public function create(){
        return view('layouts.landingpage.create');
    }

    public function edit(Request $request, $id){
        return view('layouts.landingpage.edit',[
            'emp' => User::find($id)
        ]);


    }

    public function update(Request $request, User $id){
        $formField = $request->validate([
            'id'=>'',
            'last_name'=>'required',
            'first_name'=>'required',
            'middle_name'=>'required',
            'address'=>'required',
            'salary'=>'required'
        ]);

        $id->update($formField);
        return redirect()->to('/user')->with('message','Updated Successfully!');
    }

    public function store(Request $request){
        $formField = $request->validate([
            'id'=>'',
            'last_name'=>'required',
            'first_name'=>'required',
            'middle_name'=>'required',
            'address'=>'required',
            'salary'=>'required'

        ]);



        User::create($formField);

        return redirect()->to('/user')->with('message','Added Successfully!');
    }


    public function destroy(Request $request, $id){
        $emp = User::find($id);
        $emp->delete();
        return redirect('/user');
    }

}
