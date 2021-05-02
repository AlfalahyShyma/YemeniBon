<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet'
    href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css'>
<link rel='stylesheet' href='https://unpkg.com/filepond/dist/filepond.min.css'>
<link rel="stylesheet" href="./style.css">

    {{-- our traines --}}
    <div class="Trainees bg-gray" >
    
  
      <div class="row ">
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
       <div class="form-group">
       <label class="control-label m-3" for="image">{{__('about.Trainees')}} {{__('about.Description')}} </label>  
         <textarea  name="Trainees" placeholder="Trainees' Quotations  Long Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
       </textarea> 
       </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
       <div class="form-group">
       <label class="control-label m-3" for="image">{{__('about.Trainees')}} {{__('about.Description')}} </label>  
         <textarea  name="Trainees_ar" placeholder="Trainees' Quotations  Long Arabic Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
       </textarea> 
       </div>
        </div>
        </div>
    
    <div class="row ">
     <p>
    <label class="control-label m-3" for="image">{{__('about.Trainees')}} {{__('about.name')}} </label>  
     </p>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
    <div class="form-group">
    <input  name="Trainees_name" placeholder="Trainees Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
    </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
    <div class="form-group">
    <input  name="Trainees_name_ar" placeholder="Trainees Arabic Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
    </div>
    </div>
    </div>
    <div class="row ">
    <p>
        <label class="control-label m-3" for="image">{{__('about.Trainees')}} {{__('about.Job')}} </label>  
         </p>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
    <div class="form-group">
    <input  name="Trainees_job" placeholder="Trainees Job" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
    </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
    <div class="form-group">
    <input  name="Trainees_job_ar" placeholder="Trainees Job Arabic Address" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
    </div>
    </div>
  <br>
  <br>
   <div >
      <button type="button" name="add" id="adding" class="btn" style="float:right;background:#5E3C23;color:#fff">Add More</button> 
    </div>
   <div class="more_inputs">


   </div>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>


    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){

  var j= 1;
  console.log("add");

  $("#adding").click(function(){
    console.log("adding");

    j++;
    $(".more_inputs").append(' <div class="row_div"><div class="row"><div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 "><div class="form-group"> <label class="control-label m-3" for="image">{{__("about.Trainees")}} {{__("about.Description")}} </label>  <textarea  name="Trainees[]" placeholder="Trainees Quotations  Long Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text"></textarea> </div> </div><div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 "><div class="form-group"><label class="control-label m-3" for="image">{{__("about.Trainees")}} {{__("about.Description")}} </label>  <textarea  name="Trainees_ar[]" placeholder="Trainees Quotations  Long Arabic Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text"></textarea>  </div></div></div><div class="row "><p><label class="control-label m-3" for="image">{{__("about.Trainees")}} {{__("about.name")}} </label>  </p><div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 "><div class="form-group"><input  name="Trainees_name[]" placeholder="Trainees Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text"></div></div><div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 "><div class="form-group"><input  name="Trainees_name_ar[]" placeholder="Trainees Arabic Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text"></div></div></div><div class="row "><p><label class="control-label m-3" for="image">{{__("about.Trainees")}} {{__("about.Job")}} </label>   </p><div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 "><div class="form-group"><input  name="Trainees_job[]" placeholder="Trainees Job" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text"></div></div><div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 "><div class="form-group"><input  name="Trainees_job_ar[]" placeholder="Trainees Job Arabic Address" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text"></div></div></div><br><br><br><br><br><br><div ><button type="button" name="add" id="row'+j+'"  style="float:right;background:red;color:#fff" class="btn  btn_remove2">Remove</button></div>  </div>');
  });

  $(document).on('click', '.btn_remove2', function(){  
    console.log("ghfht");
   
    var selectedRowForDeletion = $(this).closest(".row_div");

    selectedRowForDeletion.remove();
    console.log("button_id");

  });

  // $("#submit").on('click',function(){
  //   var formdata = $("#add_name").serialize();
  //   $.ajax({
  //     url   :"action.php",
  //     type  :"POST",
  //     data  :formdata,
  //     cache :false,
  //     success:function(result){
  //       alert(result);
  //       $("#add_name")[0].reset();
  //     }
  //   });
  // });
});
</script>