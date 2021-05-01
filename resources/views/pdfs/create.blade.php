@extends('layouts.master')
@section('content')
<section id=" ">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('pdf.title')}} <span style="color:#5E3C23;">{{__('pdf.title_2')}} </span> {{__('pdf.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('pdf.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('pdf.link_title_2_add')}}</li>
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
    <form class="form-card" action="/pdfs/store" method="POST" enctype="multipart/form-data">
            @csrf

<!-- Text input-->
<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input type="file" name="pdf" accept=".pdf" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  type="text">
  </div>
  </div>
  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
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

  </div>
</div>
<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">

<div class="form-group">
  <input  name="name" placeholder="pdf Name" value="{{ old('name') }}" 
  class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">

<div class="form-group">
  <input  name="name_ar" value="{{ old('name_ar') }}"  placeholder="pdf Arabic Name" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row my-5">

 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
 <div class="form-group">
  <select class="form-control col-md-4 mx-3" name="category_id" style="font-size:15px;">
      @foreach($category as $cat)
      <option style="color:black;" value="{{ $cat->id }} ">{{$cat->name }}</option>
      @endforeach
    </select> 
    </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
<input  name="date"  class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="date">
  </div>
  </div>
</div>
<div class="row ">
<div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-6 m-5">

<div class="form-group">
  <textarea  name="desc" id="mytextarea" value="{{ old('desc') }}"  placeholder="pdf description" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text"></textarea>
 </div>
 </div>

 <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-6 m-5">

<div class="form-group">
  <textarea  name="desc_ar" id="mytextarea_ar" value="{{ old('desc_ar') }}" placeholder="pdf Arabic description" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text"></textarea>
 </div>
 </div>
 </div>

<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="publisher"  value="{{ old('publisher') }}"  placeholder="pdf publisher" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="publisher_ar" value="{{ old('publisher_ar') }}"  placeholder="pdf Arabic publisher" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>

 <div class="row ">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-5">
<div class="form-group">
  <input  name="download_url"  value="{{ old('download_url') }}"  placeholder="pdf download_url" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>

 <div class="row ">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-5">
<div class="form-group">
  <input  name="veiw_url" value="{{ old('veiw_url') }}"  placeholder="pdf veiw_url" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>


<!-- Button -->
<div class="form-group col-12 mt-4 mx-5">
  <div class="form-actions "  style=" margin-left:1%;">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px;"> {{__('pdf.add_btn')}}</button>
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














