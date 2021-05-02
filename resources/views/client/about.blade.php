@include('client/header')

<div class='blurImg'>
    <!-- style="background-image: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=656&q=80')" -->
    <div class="page-bg"></div>
    <div class='blur' style="background-image: url('https://d262ilb51hltx0.cloudfront.net/fit/c/1600/1280/gradv/29/81/40/darken/50/blur/50/1*4ncz3hLxmL8E_bUh-0z62w.jpeg')"></div>
</div>
<!-- style="background-color: #e3c47a;" -->
<header class="pages-header">
    <div>
        <h1>
            {{__('about.about_title')}}
        </h1>
        <p>
            {{__('about.more_title')}}
        </p>
    </div>
</header>
@foreach($abouts as $about)
<main>
    <div class="about-wrapper">
        <h1>{{__('about.title')}}</h1>
        <p class="s1-desc">

            @if(Config::get('app.locale')=='en')
          
        {{$about->initiative_desc}}

@elseif(Config::get('app.locale')=='ar')
       {{$about->initiative_ar_desc}}                  

@endif

        </p>

        <h1>{{__('about.title1')}}</h1>
        <div class="training-video">
            {{-- <video id="video_id" controls="false">
                <source src="{{asset('asset/video/yemeni_coffee.mp4')}}" type="video/mp4;codecs=&quot;avc1.42E01E, mp4a.40.2&quot;">
            </video> --}}
        </div>
        <p class="s2-desc ">

            @if(Config::get('app.locale')=='en')
          
            {{$about->Training_desc}}
    
    @elseif(Config::get('app.locale')=='ar')
           {{$about->Training_ar_desc}}                  
    
    @endif
    
        </p>

        <h1>{{__('about.title2')}}:</h1>
        <div class="s3-desc">
            @if(Config::get('app.locale')=='en')
          
            {{$about->objectives_desc}}
    
    @elseif(Config::get('app.locale')=='ar')
           {{$about->objectives_ar_desc}}                  
    
    @endif
        </div>
        <div class="s4-desc">
            <div class="teams-wrapper">
                <h1 class="team-title">{{__('about.Trainers')}}</h1>
                <div class="testimonials">
                    @foreach($contenet as $contenets)
                    <blockquote class="testimonials__item testimonial">
                        <div class="testimonial__photo">
                            <img src="{{asset('asset/img/logo.png')}}" alt="Abdullatif Aljaradi">
                        </div>
                        <div class="testimonial__text">
                            <p>
                                @if(Config::get('app.locale')=='en')
          
                                {{$contenets->Trainers}}
                        
                        @elseif(Config::get('app.locale')=='ar')
                               {{$contenets->Trainers_ar}}                  
                        
                               @endif
                            </p>
                        </div>
                        <cite class="testimonial__person">
                            @if(Config::get('app.locale')=='en')
          
                            {{$contenets->Trainers_name}}
                    
                    @elseif(Config::get('app.locale')=='ar')
                           {{$contenets->Trainers_name_ar}}                  
                    
                           @endif
                            <span>
                                @if(Config::get('app.locale')=='en')
          
                                {{$contenets->Trainers_job}}
                        
                        @elseif(Config::get('app.locale')=='ar')
                               {{$contenets->Trainers_job_ar}}                  
                        
                               @endif
                            </span></cite>
                    </blockquote>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <div class="s5-desc">
            <div class="trainee-wrapper">
                <h1 class="trainee-title">{{__('about.Trainees')}}</h1>
                @foreach($about_trainees as $about_trainee)
                <div class="t-quotes">
                    <div class="one slide">
                        <blockquote class="t-b-quote">
                            <span class="leftq quotes">&ldquo;</span>
                            <p>
                                @if(Config::get('app.locale')=='en')
          
                                {{$about_trainee->Trainees}}
                        
                        @elseif(Config::get('app.locale')=='ar')
                               {{$about_trainee->Trainees_ar}}                  
                        
                               @endif
                            </blockquote>

                        <h2>  
                            @if(Config::get('app.locale')=='en')
          
                            {{$about_trainee->Trainees_name}}
                    
                    @elseif(Config::get('app.locale')=='ar')
                           {{$about_trainee->Trainees_name_ar}}                  
                    
                           @endif 
                        </h2>
                        <h6>
                            @if(Config::get('app.locale')=='en')
          
                            {{$about_trainee->Trainees_job}}
                    
                    @elseif(Config::get('app.locale')=='ar')
                           {{$about_trainee->Trainees_job_ar}}                  
                    
                           @endif 
                        </h6>
                    </div>
                </div>
                @endforeach

               

               
            </div>
        </div>
        <div class="s6-desc">
            <div class="gallery-wrapper">
                <h1 class="gallery-title">{{__('about.photo')}}</h1>

                <div class="gallery">
                    @foreach (json_decode($about->multi_image) as $image)

                    <div class="gallery-item">
                        <img class="gallery-image" src="{{asset('images/'.$image)}}" alt="sunset behind San Francisco city skyline">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</main>
@include('client/footer')