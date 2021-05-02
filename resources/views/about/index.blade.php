@extends('layouts.master')
@section('content')
<section >
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">
                <div class="row" style="">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h1 class="pageheader-title"><b class="logo">{{__('project.title')}} <span
                                        style="color:#5E3C23;">{{__('project.title_2')}} </span>
                                    {{__('sidebar.about')}}</b> </h1>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"
                                                class="haver">{{__('sidebar.about')}}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{__('about.link_title_2')}}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;"
                            href="/about/create">{{__('about.add_new_btn')}}</a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " style="overflow-x:auto;">

                        <table class="table table-responsive text-center table-striped" style=" width:100%;">
                            <tr style="background-color:whitesmoke;">
                                <th class="text-center" width="10px">{{__('about.Id')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index')}} {{__('about.arabic')}}
                                </th>
                                <th class="text-center" width="200px">{{__('about.title_index2')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index2')}}
                                    {{__('about.arabic')}}</th>
                                <th class="text-center" width="200px">{{__('about.title2')}}</th>
                                <th class="text-center" width="200px">{{__('about.title2')}} {{__('about.arabic')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index3')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index3')}}
                                    {{__('about.arabic')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index4')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index4')}}
                                    {{__('about.arabic')}}</th>

                                <th class="text-center" width="200px">{{__('about.title_index5')}} </th>
                                <th class="text-center" width="200px">{{__('about.title_index5')}}
                                    {{__('about.arabic')}}</th>

                                <th class="text-center" width="200px">{{__('about.title_index6')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index6')}}
                                    {{__('about.arabic')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index7')}}</th>
                                <th class="text-center" width="200px">{{__('about.title_index7')}}
                                    {{__('about.arabic')}}</th>

                                <th class="text-center" width="200px">{{__('about.title_index8')}} </th>
                                <th class="text-center" width="200px">{{__('about.title_index8')}}
                                    {{__('about.arabic')}}</th>


                                <th class="text-center" width="280px">{{__('about.multi_img')}}</th>
                                <th class="text-center" width="280px">{{__('about.Action')}}</th>
                            </tr>
                            @foreach ($abouts as $about )
                            <tr>
                                <td>{{ $about->id  }}</td>
                                <td>{{ $about->initiative_desc}}</td>
                                <td>{{ $about->initiative_ar_desc}}</td>
                                <td>{{ $about->Training_desc}}</td>
                                <td>{{ $about->Training_ar_desc}}</td>
                                <td>{{ $about->objectives_desc}}</td>
                                <td>{{ $about->objectives_ar_desc }}</td>
                                <td>
                                    @foreach ($contenet as $_Trainers)
                                    @if($about->id==$_Trainers->about_id)
                                    {{ $_Trainers->Trainers }}<br><br><br><br>
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($contenet as $_Trainers_ar)
                                    @if($about->id==$_Trainers_ar->about_id)

                                    {{ $_Trainers_ar->Trainers_ar }}<br><br><br><br>
                                    @endif

                                    @endforeach 
                                </td>




                                <td>
                                    @foreach ($contenet as $_Trainers_name)
                                    @if($about->id==$_Trainers_name->about_id)

                                    {{ $_Trainers_name->Trainers_name }}<br><br><br><br>
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($contenet as $_Trainers_name_ar)
                                    @if($about->id==$_Trainers_name_ar->about_id)

                                    {{ $_Trainers_name_ar->Trainers_name_ar }}<br><br><br><br>
                                    @endif
                                    @endforeach </td>


                                <td>
                                    @foreach ($contenet as $_Trainers_job)
                                    @if($about->id==$_Trainers_job->about_id)
                                    {{ $_Trainers_job->Trainers_job}}<br><br><br><br>
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($contenet as $_Trainers_job_ar)
                                    @if($about->id==$_Trainers_job_ar->about_id)
                                    {{ $_Trainers_job_ar->Trainers_job_ar}}<br><br><br><br>
                                    @endif
                                    @endforeach </td>


                                <td>
                                    @foreach ($about_trainees as $_Trainers_job_ar)
                                    @if($about->id==$_Trainers_job_ar->about_id)
                                    {{ $_Trainers_job_ar->Trainees}}<br><br><br><br>
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($about_trainees as $_Trainers_job_ar)
                                    @if($about->id==$_Trainers_job_ar->about_id)
                                    {{ $_Trainers_job_ar->Trainees_ar}}<br><br><br><br>
                                    @endif
                                    @endforeach
                                    
                                     </td>


                                <td>
                                    @foreach ($about_trainees as $_Trainers_job_ar)
                                    @if($about->id==$_Trainers_job_ar->about_id)
                                    {{ $_Trainers_job_ar->Trainees_name}}<br><br><br><br>
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($about_trainees as $_Trainers_job_ar)
                                    @if($about->id==$_Trainers_job_ar->about_id)
                                    {{ $_Trainers_job_ar->Trainees_name_ar}}<br><br><br><br>
                                    @endif
                                    @endforeach </td>

                                <td>
                                    @foreach ($about_trainees as $_Trainers_job_ar)
                                    @if($about->id==$_Trainers_job_ar->about_id)
                                    {{ $_Trainers_job_ar->Trainees_job}}<br><br><br><br>
                                    @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($about_trainees as $_Trainers_job_ar)
                                    @if($about->id==$_Trainers_job_ar->about_id)
                                    {{ $_Trainers_job_ar->Trainees_job_ar}}<br><br><br><br>
                                    @endif
                                    @endforeach </td>



                                <td>
                                    @foreach (json_decode($about->multi_image) as $image)

                                    <img src="{{ asset('images/'.$image) }}" width="100">

                                    @endforeach

                                </td>

                                <td>
                                    <form action="/admin/abouts/destroy/{{$about->id}}" method="POST">


                                      
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger my-2 delete-confirm"
                                            data-name="{{ $about->title }}" name="delete"
                                            style="font-size:12px;">{{__('about.delete_btn')}}</button>

                                    </form>
                                </td>
                            </tr>


                            @endforeach
                        </table>
                        <script
                            src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
                        <script>

                            $('.delete-confirm').click(function (event) {
                                var form = $(this).closest("form");
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
                                                text: "This page has been deleted successfully",
                                                icon: "success",
                                            })
                                        }
                                    });
                            });
                        </script>
                        <!-- /col-lg-3 -->
                    </div>
                </div>
            </div>
        </div>

                <!-- /row -->
    </section>
</section>
<script>
    function dep_select() {
        var m = $("#selectdep").val();
        if (m == 1) {
            $('.dep4').css('display', 'none');
        }
    }



</script>

@endsection