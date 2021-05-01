@extends('layouts.master')
@section('content')

<section id=" ">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('Banner.title')}} <span style="color:#5E3C23;">{{__('Banner.title_2')}} </span>{{__('Banner.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="haver">{{__('Banner.link_title')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('Banner.link_title_2_add')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-card" action="/admin/banners/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="image-upload-container">
                <div class="image-upload-one">
                  <div class="center">
                    <div class="form-input">
                      <label for="file-ip-1">
                        <img id="file-ip-1-preview" src="https://i.ibb.co/ZVFsg37/default.png">
                        <button type="button" class="imgRemove" onclick="myImgRemove(1)"></button>
                      </label>
                      <input type="file"  name="image" id="file-ip-1" accept="image/*" onchange="showPreview(event, 1);">
                    </div>
                    <small class="small">Use the &#8634; icon to reset the image</small>
                  </div>
                </div>
               
          
                
            
              </div>
<div class="row ">
<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-4 m-5">
<div class="form-group">
  <input  name="title" placeholder="Image Title" value="{{ old('title') }}"  class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7 m-5">
<div class="form-group">
  <input  name="desc" placeholder="Image Description" value="{{ old('desc') }}" class="col-md-8 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-4 m-5">
<div class="form-group">
  <input  name="title_ar" placeholder="Image Arabic Title"  value="{{ old('title_ar') }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7 m-5">
<div class="form-group">
  <input  name="desc_ar" placeholder="Image Arabic Description" value="{{ old('desc_ar') }}" class="col-md-8 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-4 m-5">
 <div class="form-group">
  <input  name="link" placeholder="Project Link" value="{{ old('link') }}"  class="col-md-8 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>

<!-- Button -->
<div class="form-group ml-8 m-5" style="margin-top:1%;">
  <div class="form-actions col-12">
    <button type="submit"  class="btn btn-primary col-12 mx-auto btn-color" style="color:white;font-size:14px;">{{__('Banner.add_btn')}}</button>
  </div>
  </div>

    </form>
    </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
   
        <script>
var number = 1;
do {
  function showPreview(event, number){
    if(event.target.files.length > 0){
      let src = URL.createObjectURL(event.target.files[0]);
      let preview = document.getElementById("file-ip-"+number+"-preview");
      preview.src = src;
      preview.style.display = "block";
    } 
  }
  function myImgRemove(number) {
      document.getElementById("file-ip-"+number+"-preview").src = "https://i.ibb.co/ZVFsg37/default.png";
      document.getElementById("file-ip-"+number).value = null;
    }
  number++;
}
while (number < 5);

</script>
@endsection














