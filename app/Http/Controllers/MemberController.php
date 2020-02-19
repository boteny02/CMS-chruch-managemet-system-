<?php

namespace App\Http\Controllers;

use App\Zone;
use App\Department;
use App\Member;
use Illuminate\Http\Request;
use Auth;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id=Auth::user()->id;
        $cnt=Member::where('user_id', $user_id)->count();
        $members = Member::where('user_id', $user_id)->latest()->paginate(5);
        return view('members.index',compact('members','cnt'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id=Auth::user()->id;
        $cnt=Member::latest('id')->get();
       $dpt=Department::all(); 
        $zn=Zone::all(); 
        return view('members.create', compact('zn','cnt','dpt','user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'firstname'=>'required',
            'middle'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'zone_id'=>'required',
            'city'=>'required',
            'phonenumber'=>'required',
            'email'=>'required',
            'dateofbirth'=>'required',
            'gender'=>'required',
            'maritalstatus'=>'required',
            'department_id'=>'required',
        ]);
        Member::create($request->all());
        
        return redirect()->route('members.index')->with('success','member created successfully.');
        $request->validate([

            
        ]);
  
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
