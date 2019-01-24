<?php

namespace App\Http\Controllers;

use App\Fellows;
use Illuminate\Http\Request;

class FellowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name"=>"required",
            "phone"=>"required",
            "email"=>"required|unique:fellows",
            "gender"=>"required",
            "qualification"=>"required",
            "choice"=>"required",
             "dob"=>"required",
             "soo"=>"required",
             "lga"=>"required",
             "address"=>"required",
             "pics"=>"required"
            
           
        ]);
        
          $filename = $request->file('pics')->getClientOriginalName();

        $file=pathinfo($filename,PATHINFO_FILENAME);

        $ext =$request->file('pics')->getClientOriginalExtension();

        $tostore=$file . "_" . time() . "." . $ext;

        $path =$request->file('pics')->storeAs('public/upload', $tostore);


        
        
        $fellow=new Fellows;
        $fellow->name=$request->name;
        $fellow->phone=$request->phone;
        $fellow->email=$request->email;
        $fellow->gender=$request->gender;
        $fellow->qualification=$request->qualification;
        $fellow->choice=$request->choice;
        $fellow->dob=$request->dob;
        $fellow->soo=$request->soo;
        $fellow->lga=$request->lga;
        $fellow->address=$request->address;
        $fellow->pics=$tostore;
        
        if($fellow->save()){
            return redirect()->back()->with('status',"You have Successfully Registered. Your user id is ". $fellow->id);
        }
        return redirect()->back()->with('status','error while saving your data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fellows  $fellows
     * @return \Illuminate\Http\Response
     */
    public function show(Fellows $fellows)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fellows  $fellows
     * @return \Illuminate\Http\Response
     */
    public function edit(Fellows $fellows)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fellows  $fellows
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fellows $fellows)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fellows  $fellows
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fellows $fellows)
    {
        //
    }
}
