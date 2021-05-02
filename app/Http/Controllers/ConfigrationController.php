<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configration;
use DB;
class ConfigrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configrations = configration::select('configrations.id','configrations.socialmedia','configrations.icon',
        // 'configrations.address','configrations.address_ar','configrations.phone','configrations.email'
        )->get();
        return view('configrations.index',['configrations' => $configrations]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configrations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(['socialmedia'=>'required|url',
        'icon'=>'required|mimes:jpg,png,jpeg']);
        configration::create($request->all());
        $configration = new configration();
        if($request->hasfile('icon') )  
        {
        $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->icon->getClientOriginalExtension();
        $configration= $request->icon->move(public_path('images'), $name);
        configration::create(
            [
                "icon"=>$name,
                "socialmedia"=>$request->input('socialmedia')
            ]
        );
        DB::commit();
       

        }

           return redirect('/admin/configrations/index')->with('completed', 'content has been add');  
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
    public function edit($configration_id)
    {
        $configration= configration::findOrFail($configration_id);
         return view('configrations.edit', compact('configration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $configration_id)
    {
        $request->validate([
            'socialmedia' => 'url',
]);

         if($request->hasfile('icon') )  
        {
        $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->icon->getClientOriginalExtension();
        $configration= $request->icon->move(public_path('images'), $name);
          $configration= configration::whereId($configration_id)->update([
            'icon'=> $name,
            'socialmedia'=>$request->input('socialmedia'),

             ]);
         }
         else
         {
             $configration= configration::whereId($configration_id)->update([
            'socialmedia'=>$request->input('socialmedia'),
        

            ]);
        }
          
             return redirect('/admin/configrations/index')->with('completed', 'configration has been updated');
    
        
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($configration_id)
    {
        $configration= configration::find($configration_id);


         $configration->delete();
         return redirect('/admin/configrations/index')->with('completed','configration deleted successfully');
    }    
}
