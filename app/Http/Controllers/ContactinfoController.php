<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactinfo;

class ContactinfoController extends Controller
{
   
    public function index()
    {
        $contactinfos = Contactinfo::select('contactinfos.id','contactinfos.address','contactinfos.address_ar','contactinfos.phone','contactinfos.email')->get();
        return view('contactinfos.index',['contactinfos' => $contactinfos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contactinfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate(['address'=>'required|string|min:5|max:255',
        'address_ar'=>'required|string|min:5|max:255',
        'email'=>'required|email',
        'phone'=>'required|digits:9']);


        $contactinfo = new Contactinfo();
        $contactinfo->address = $request->input('address');
        $contactinfo->address_ar = $request->input('address_ar');
        $contactinfo->phone = $request->input('phone');
        $contactinfo->email = $request->input('email');
        $contactinfo->save();

      

          // return view('contactinfos.create');
           return redirect('/admin/contactinfos/index')->with('completed', 'content has been add');  
           }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($contactinfo_id)
    {
        $contactinfo= Contactinfo::findOrFail($contactinfo_id);
        return view('contactinfos.edit', compact('contactinfo'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contactinfo_id)
    {
        $request->validate(['address'=>'required|string|min:5|max:255',
        'address_ar'=>'required|string|min:5|max:255',
        'email'=>'required|email',
        'phone'=>'required|digits:9']);


         $contactinfo= Contactinfo::whereId($contactinfo_id)->update([
            'address'=>$request->input('address'),
            'address_ar'=>$request->input('address_ar'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email')

            ]);
          
             return redirect('/admin/contactinfos/index')->with('completed', 'contactinfo has been updated');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($contactinfo_id)
    {
        $contactinfo= Contactinfo::find($contactinfo_id);
        $contactinfo->delete();
        return redirect('/admin/contactinfos/index')->with('completed','contactinfo deleted successfully');
    }
}
