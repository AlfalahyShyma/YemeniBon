@foreach ($article as $articles )


    
        <div class="pubpanel">
            <div class="cardpub-in">
                <div class="layer-type">
                <p>Article</p>
            </div>
            {{-- <img class="cardpub-img" src="{{asset('asset/img/t13.JPG')}}" alt="" srcset=""> --}}
            @if(Config::get('app.locale')=='en')
            <h4>{{$articles->article_name}}</h4>
           <p>{{$articles->date}}</p>
           
            @else
            <h4>{{$articles->article_ar}}</h4>
            <p>{{$articles->date}}</p>
            @endif
            <a  href="/details/articles/{{$articles->id}}" class="show-pub-btn">
                <div>{{__('client.show_detail')}}</div>
            </a>
        </div>
    </div>





@endforeach

@foreach ($pdf as $pdfs )


    <div class="pubpanel">
        <div class="cardpub-in">
        <div class="layer-type">
                <p>PDF</p>
            </div>
            {{-- <img class="cardpub-img" src="{{asset('asset/img/t13.JPG')}}" alt="" srcset=""> --}}
           
           @if(Config::get('app.locale')=='en')
           <h4>{{$pdfs->name}}</h4>
           <p>{{$pdfs->date}}</p>
           @else
           <h4>{{$pdfs->name_ar}}</h4>
           <p>{{$pdfs->date}}</p>
           @endif
            <a href="/details/pdf/{{$pdfs->id}}" class="show-pub-btn">
                <div>{{__('client.show_detail')}}</div>
            </a>
        </div>
    </div>


@endforeach 


@foreach ($Interview as $Interviews )


    <div class="pubpanel">
        <div class="cardpub-in">
        <div class="layer-type">
                <p>Interview</p>
            </div>
            {{-- <img class="cardpub-img" src="{{asset('asset/img/t13.JPG')}}" alt="" srcset=""> --}}
            @if(Config::get('app.locale')=='en')
            <h4>{{$Interviews->name}}</h4>
            <p>{{$Interviews->date}}</p>
            @else
            <h4>{{$Interviews->name_ar}}</h4>
            <p>{{$Interviews->date}}</p>
            @endif
            
            
            <a  href="/details/interview/{{$Interviews->id}}" class="show-pub-btn">
                <div>{{__('client.show_detail')}}</div>
            </a>
        </div>
    </div>


@endforeach 