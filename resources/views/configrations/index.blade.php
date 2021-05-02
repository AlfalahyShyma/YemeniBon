@extends('layouts.master')
@section('content')
        <section id=" " style="width:93%;">
      <section class="wrapper" style="width:100%;">
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('config.title')}} <span style="color:#5E3C23;">{{__('config.title_2')}} </span>{{__('config.title_3')}} </b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('config.title_3')}}  </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('config.link_title_2')}}  </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:14px;" href="/admin/configrations/create">{{__('config.add_new_btn')}} </a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
    <div class="text-left m-5 py-5"> <h2 class="mb-4"><b> {{__('config.smt')}}  </b> </h2><div>
      <div class="contact-form">
        @if(session()->has('completed'))
        <div class=" alert alert-success">
    {{ session()->get('completed') }}
    </div>
    @endif
    <table class="table table-responsive text-center"  style=" width:100%; font-size:14px;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-left" width="90px">{{__('config.Id')}}</th>
            <th class="text-center"width="400px">Link</th>
            <th class="text-center"width="100px">Icon</th>
            <th class="text-center" width="480px">{{__('config.Action')}}</th>
        </tr>
        @foreach ($configrations as $configration )
            <tr>
                <td class="text-center">{{ $configration->id  }}</td>
                <td class="text-center">{{ $configration->socialmedia }}</td>
                <td class="text-center"><img src="{{ asset('images/'.$configration->icon) }}" class="text-center" alt="img" title="" height="400px" width="400px"> </td>      
                  <td> 
                <form action="/admin/configrations/destroy/{{$configration->id}}" method="POST">
   
                @csrf


                    @method('PUT')
                    <a class="btn btn-sm btn-primary" href="/admin/configrations/edit/{{$configration->id}}" style="font-size:11px;">{{__('config.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-sm  btn-danger delete-confirm" data-name="{{ $configration->id }}" name="delete" style="font-size:11px;">{{__('config.delete_btn')}}</button>
                </form>
                  </td> 
            </tr>
            @endforeach
    </table>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
            <script>

 $('.delete-confirm').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Are you sure you want to delete ${name}?`,
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          form.submit();
          swal({
          title: ` done`,
          text: "This configration has been deleted successfully",
          icon: "success",
      })
        }
      });
  });
    </script>
           <!-- /col-lg-3 -->
           </div>
           </div>

        <!-- /row -->
      </section>
    </section>
    <script src="{{asset('lib/common-scripts.js')}}"></script>

@endsection
