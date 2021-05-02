@include('client/header')
<div class='blurImg'>
    <!-- style="background-image: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=656&q=80')" -->
    <div class="page-bg"></div>
    <div class='blur' style="background-image: url('https://d262ilb51hltx0.cloudfront.net/fit/c/1600/1280/gradv/29/81/40/darken/50/blur/50/1*4ncz3hLxmL8E_bUh-0z62w.jpeg')"></div>
</div>
<!-- style="background-color: #e3c47a;" -->
<header class="pages-header">
    <div>
        <!-- <img class="project-img" src="{{asset('asset/img/pro1.jpg')}}" alt="" srcset=""> -->
        
    </div>
</header>
<br>
<section class="publication-desc">
    <div class="pub-container">
        <section id=" ">

            <div class="pub-show">
                <div class="container">
               @foreach($pdfs as $pdf)
                    <div class="pub-show-body">
                    
                        <div class="pub-show-aside">

                            <div class="pub-img">
                                <img loading="auto" srcset="{{asset('images/'.$pdf->img)}}">

                            </div>

                           

                        </div>


                        <div class="pub-show-content">
                          
                            <div class="pub-img-title">
                                <img loading="auto" srcset="{{asset('asset/img/140-01.png')}}">

                                @if(Config::get('app.locale')=='en')
                                <h2>{{$pdf->name}}</h2>
            @else
            <h2>{{$pdf->name_ar}}</h2>
            @endif
                               
                            </div>
                            <div class="pub-show-description">
                                <p>
                                    @if(Config::get('app.locale')=='en')
                                    {{$pdf->desc}}
            @else
            {{$pdf->desc_ar}}
            @endif
                                    
                                </p>
                                    
                            </div>
                            <div class="pub-show-description">
                                <p>
                                  
                                    {{$pdf->date}}
                                </p>
                                    
                           
                                <p>
                                    @if(Config::get('app.locale')=='en')
                                    {{$pdf->publisher}}
            @else
            {{$pdf->publisher_ar}}
            @endif
                                   
                                </p>
                                    
                            </div>
                            
                                <div>Preview</div>
                            </a>
                            <a href="#" class="show-btn">
                                <div>Download</div>
                            </a>
                            <div class="layer">
                            <img loading="auto" srcset="{{asset('asset/img/coffee_bean2.png')}}">
                            </div>
                            
                        </div>
                    </div>


                </div>
                @endforeach
                <br>
<br>
<br>
<br>
<br>
<br>
        </section>
    </div>
</section>


@include('client/footer')