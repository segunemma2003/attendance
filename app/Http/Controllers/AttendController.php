<?php

namespace App\Http\Controllers;
use App\Fellows;
use App\Attend;
use Illuminate\Http\Request;

class AttendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('attendance');
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
            "id"=>"required"
        ]);
        $fellow=Fellows::whereId($request->id)->first();
        if(!$fellow){
            return redirect()->back()->with('status','You have no account with us');
        }
        $attend=NEW Attend;
        $attend->time=date("h:i:s");
        $attend->date=date("d-m-y");
        $attend->fellow()->associate($fellow);
        if($attend->save()){
            return redirect()->back()->with('status',$fellow->name."marked present at ". $attend->time);
        }
        return redirect()->back()->with('status',"No record");
    }
    public function sheet()
    {
        $q=\Request::get('q');

        if($q==null){
            $q=date("d-m-y");
        }else{
            $q=$q;
        }
        // dd($q);
        $attendance=Attend::where('date',$q)->get();
        // dd($q);
        return view('sheet',compact('attendance'));
    }
    public function allfellows(){
        $attendance=Fellows::paginate(20);
        return view('allfellows',compact('attendance'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function show(Attend $attend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function edit(Attend $attend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attend $attend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attend $attend)
    {
        //
    }
}
