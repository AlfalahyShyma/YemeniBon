<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Category;
use App\Models\Article;
use App\Models\Interview;
use App\Models\Pdf;
use DB;
class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data=Category::join('catatypes','catatypes.id','categories.catatype_id')
        ->select('categories.id','categories.name')
        ->where('catatypes.id',2)
        ->get();
       
        $article=Article::orderByDesc('created_at')->paginate(8);
        $pdf=Pdf::orderByDesc('created_at')->paginate(8);
        $Interview=Interview::orderByDesc('created_at')->paginate(8);
        if(isset($request->id))
        {
            if($request->id>0)
          {  
              $article=Article::join('categories','categories.id','articles.category_id')->where('categories.id',$request->id)
              ->select('articles.id','articles.article_name','articles.date')->orderByDesc('articles.created_at')->paginate(8);
              $pdf=Pdf::join('categories','categories.id','pdfs.category_id')->where('categories.id',$request->id)
            ->select('pdfs.id','pdfs.name','pdfs.date')->orderByDesc('pdfs.created_at')->paginate(8);
        $Interview=Interview::join('categories','categories.id','interviews.category_id')->where('categories.id',$request->id)
        ->select('interviews.id','interviews.name','interviews.date')->orderByDesc('interviews.created_at')->paginate(8); 
        }
            else
           { $article=Article::orderByDesc('created_at')->paginate(8);
        $pdf=Pdf::orderByDesc('created_at')->paginate(8);
        $Interview=Interview::orderByDesc('created_at')->paginate(8);  }
          }
        else{
            $article=Article::orderByDesc('created_at')->paginate(8);
        $pdf=Pdf::orderByDesc('created_at')->paginate(8);
        $Interview=Interview::orderByDesc('created_at')->paginate(8);
            }
        
        if($request->ajax()){
            $view=view('publications',['data'=>$data,'article'=>$article,'Interview'=>$Interview,'pdf'=>$pdf])->render();
            return response()->json(['html'=>$view]);
        }
        return view('publication.publication',['data'=>$data,'article'=>$article,'Interview'=>$Interview,'pdf'=>$pdf]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        $pdfs=Pdf::orderByDesc('created_at')->where('id',$id)->get();

        return view('publication.pdfs',['pdfs'=>$pdfs]);

        
    }

    public function details2($id)
    {
        $Article=Article::orderByDesc('created_at')->where('id',$id)->get();

        return view('publication.articles',['Article'=>$Article]);

        
    }

    public function details3($id)
    {
        $Interview=Interview::orderByDesc('created_at')->where('id',$id)->get();

        return view('publication.interview',['Interview'=>$Interview]);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
