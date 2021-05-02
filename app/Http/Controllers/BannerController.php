<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::select('banners.id','banners.image','banners.title','banners.title_ar','banners.desc','banners.desc_ar','banners.link')->get();
        return view('/banners/index',['banners' => $banners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners/create');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['image'=>'required|mimes:jpg,png,jpeg',
         'title'=>'required|min:8|max:255',
        'desc'=>'required|min:8|max:255',
        'title_ar'=>'required|min:8|max:255',
        'desc_ar'=>'required|min:8|max:255',
        'link'=>'required|url'
        ]);
        $banner = new Banner();
        $name = preg_replace('/(0)\.(\d+) (\d+)/', '$3$1$2', microtime()) . "." . $request->image->getClientOriginalExtension();
        $path= $request->image->move(public_path('images'), $name);
        $banner->image =$name;
      
        $banner->title = $request->input('title');
        $banner->desc = $request->input('desc');
        $banner->title_ar = $request->input('title_ar');
        $banner->desc_ar = $request->input('desc_ar'); 
         $banner->link = $request->input('link');

        $banner->save();
          return redirect('admin/banners/index')->with('completed', 'content has been add');  

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
    public function edit($banner_id)
    {

        $banner= Banner::findOrFail($banner_id);
         return view('banners/edit', compact('banner'));   
        
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $banner_id)
    {

        $request->validate(['image'=>'mimes:jpg,png,jpeg',
        'title'=>'min:8|max:255',
       'desc'=>'min:8|max:255',
       'title_ar'=>'min:8|max:255',
       'desc_ar'=>'min:8|max:255',
       'link'=>'url'
       ]);
        if($request->hasfile('image') )  
        {
         $name = time() . "." . $request->image->getClientOriginalExtension();
         $path= $request->image->move(public_path('images'), $name);
         $banner= Banner::whereId($banner_id)->update([
            'image'=> $name,
            'title'=>$request->input('title'),
            'desc'=>$request->input('desc'),
            'title_ar'=>$request->input('title_ar'),
            'desc_ar'=>$request->input('desc_ar'),
             'link'=>$request->input('link'),
            ]);
        }
        $banner= Banner::whereId($banner_id)->update([
            'title'=>$request->input('title'),
            'desc'=>$request->input('desc'),
            'title_ar'=>$request->input('title_ar'),
            'desc_ar'=>$request->input('desc_ar'),
            'link'=>$request->input('link'),
            ]);

      
        return redirect('/admin/banners/index')->with('completed', 'banner has been updated');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  \App\Models\banner $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($banner)
    {

        $banner= Banner::find($banner);

        $banner->delete();
        return redirect('/admin/banners/index')->with('completed','Category deleted successfully');  
      }
  

}
