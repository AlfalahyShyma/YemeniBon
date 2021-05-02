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
            Article
        </h1>
        <p>
            Description....................
        </p>
        
    </div>
</header>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<section class="publication-desc">
    <div class="pub-container">
        <section id=" ">

            <div class="pub-show">
                <div class="container">
                    @foreach ($Article as $Articles )

                    <div class="pub-show-body">
                    
                        <div class="pub-show-aside">

                            <div class="pub-img">
                                <img loading="auto" srcset="{{asset('images/'.$Articles->image)}}">
                            </div>

                            

                           

                        </div>


                        <div class="pub-show-content">
                          
                            <div class="pub-img-title">
                                <img loading="auto" src="{{asset('asset/img/140-01.png')}}">
                                <h2>
                                    @if(Config::get('app.locale')=='en')
                                    <h2>{{$Articles->article_name}}</h2>
                @else
                <h2>{{$Articles->article_ar}}</h2>
                @endif
                                </h2>
                            </div>
                            <div class="pub-show-description">
                                <p>
                                    @if(Config::get('app.locale')=='en')
                                    <h2>{{$Articles->desc}}</h2>
                @else
                <h2>{{$Articles->desc_ar}}</h2>
                @endif
                 </p>
                                   
                            </div>
                            <br>
                            <br>

    


                            
                            <p>
                                @if(Config::get('app.locale')=='en')
                                {{$Articles->publisher}}
            @else
            {{$Articles->publisher_ar}}
            @endif   
                            </p>
                            <p>
                                
                                @if(Config::get('app.locale')=='en')
                                {{$Articles->date}}
            @else
            {{$Articles->date}}
            @endif   
                            </p>

                            <br>
                            <p>
                                @if(Config::get('app.locale')=='en')
                                {{$Articles->source_url}}
            @else
            {{$Articles->source_url}}
            @endif   
                            </p>
                                

                                

                                

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