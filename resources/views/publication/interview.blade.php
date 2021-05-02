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
            Interview
        </h1>
        <p>
            Description....................
        </p>
        
    </div>
</header>
<br>
<section class="publication-desc">
    <div class="pub-container">
        <section id=" ">

            <div class="pub-show">
                <div class="container">
                    @foreach ($Interview as $Interviews )

                    <div class="pub-show-body">
                    
                        <div class="pub-show-aside">

                            <div class="pub-img" data-aos="zoom-out-down" data-aos-duration="2000">
                                <img loading="auto" srcset="{{asset('images/'.$Interviews->img)}}">
                            </div>

                            

                           

                        </div>


                        <div class="pub-show-content">
                         
                            <div class="pub-img-title" data-aos="fade-left" data-aos-duration="2000">
                                <img loading="auto" src="{{asset('asset/img/140-01.png')}}">
                                <h2>
                                    @if(Config::get('app.locale')=='en')
                                    {{$Interviews->name}}
                @else
               {{$Interviews->name_ar}}
                @endif
                                </h2>
                            </div>
                            <div class="pub-show-description" data-aos="zoom-in" data-aos-duration="3000">
                                <p>@if(Config::get('app.locale')=='en')
                                    {{$Interviews->desc}}
                @else
               {{$Interviews->desc_ar}}
                @endif
             </p>
                                   
                            </div>

                           

    <blockquote class="blockquote" data-aos="fade-down-right" data-aos-duration="3000">
        <span id="q-inter-start">“</span><p>
            @if(Config::get('app.locale')=='en')
            {{$Interviews->interview}}
@else
{{$Interviews->interview_ar}}
@endif        </p>
    </blockquote>


                            
                            <p data-aos="zoom-in" data-aos-duration="2000"> @if(Config::get('app.locale')=='en')
                                {{$Interviews->interviewer}}
                    @else
                    {{$Interviews->interviewer_ar}}
                    @endif  </p>
                            <p data-aos="zoom-in" data-aos-duration="3000"> @if(Config::get('app.locale')=='en')
                                {{$Interviews->date}}
                    @else
                    {{$Interviews->date}}
                    @endif  </p>
                                <audio class="_audio" controls data-aos="zoom-in" data-aos-duration="3000">
                                    <source src="{{asset('asset/audio/'.$Interviews->voice)}}" type="audio/mpeg">
                                </audio>
<br>
                                

                                


                            <div class="layer" data-aos="fade-up-left" data-aos-duration="1000">
                            <img loading="auto" srcset="{{asset('asset/img/coffee_bean2.png')}}">
                            </div>

                           
                            
                        </div>
                    </div>


                </div>
        </section>
@endforeach
        
    </div>
</section>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

@include('client/footer')