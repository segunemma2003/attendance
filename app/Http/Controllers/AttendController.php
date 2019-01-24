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
        $attend=new Attend;
        $attend->time=date("h:i:s");
        $attend->date=date("y-m-d");
        // dd(date("y-m-d"));
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
            $q=date("y-m-d");
        }else{
            $q=$q;
        }
        // dd($q);
        $attendance=Attend::where('date',$q)->get();
        $absentees=Fellows::all();
        // dd($q);
        return view('sheet',compact('attendance','fellows'));
    }
    public function allfellows(){
        $attendance=Fellows::paginate(20);
        $netpren=Fellows::WhereChoice('Netpreneur');
        $graphics=Fellows::WhereChoice('Graphics Design');
        $front=Fellows::WhereChoice('Frontend Development');
        $back=Fellows::WhereChoice('Backend Development');
        $mobile=Fellows::WhereChoice('Mobile Development');

        return view('allfellows',compact('attendance','netpren',
                        'graphics', 'front', 'back', 'mobile'));
    }
    public function signout($id)
    {
        $attend=Attend::whereId($id)->first();
        $attend->timeout=date("h:i:s");
        $attend->dateout=date("d-m-y");
        if($attend->save()){
           return redirect()->back()->with('status',$attend->fellow->name." signed out  at ". $attend->timeout);
        }
        return redirect()->back()->with('status',"No record"); 

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
    public function edit($id)
    {
        $fellow=Fellows::whereId($id)->first();
        return view('edit',compact('fellow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     "name"=>"required",
        //     "phone"=>"required",
        //     "email"=>"required|unique:fellows",
        //     "gender"=>"required",
        //     "qualification"=>"required",
        //     "choice"=>"required"
        // ]);
        $fellow=Fellows::whereId($id)->first();
        $fellow->name=$request->name;
        $fellow->phone=$request->phone;
        $fellow->email=$request->email;
        // $fellow->gender=$request->gender;
        $fellow->qualification=$request->qualification;
        // $fellow->choice=$request->choice;
        if($fellow->save()){
            return redirect('/allfellows')->with('status',"You have updated your profile successfully");
        }
        return redirect('/allfellows')->with('status','error while saving your data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attend  $attend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attenda=Attend::whereId($id)->first();
        // dd($attenda);
        if($attenda->delete()){
            return redirect()->back()->with('status',"You have updated your profile successfully");
        }
        return redirect()->back()->with('status',"Opps an error occurred!!!");
    }
}
