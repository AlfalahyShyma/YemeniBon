@include('client/header')

<main id="content" class="main">
    <section id="publication-wrrapper" class="content">

        <div class="publication-container">
        <!-- <div class="layer-pg" style="background-image: url('../img/bg.png');
    background-repeat: no-repeat;
    background-size: contain;">                     
        </div> -->
            <div class="text-center">
                <!-- <h1 class="title">Flexbox Grid</h1> -->
                <div class="filter-wrapper">
                    <div class="flex">
                        <a  class="active-filter" data-rel="all"  onclick="cliced(0)">All</a>
                        @foreach($data as $cat)
                        <a data-rel=""  onclick="cliced('{{ $cat->id}}')">{{$cat->name}}</a>
                       
                        @endforeach
                          
                    </div>
                </div>
                <!-- <h2 class="subheading" data-breakpoint></h2> -->
            </div>
            <br>
    
    
            <div class="flex"  id="post-data">
              
               

             


                @include('publications')
    
            </div>
        </div>
           
        <button class="more" id="more">{{__('client.show_more')}}</button>
   
</div>
    </section>

   

    
</main>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


<script>
    var id=0;
 
     function load(page,id){
         $.ajax({
             url:"/publication?page="+page+"&id="+id,
             type:"get",
           
         }).done(function(data){
             if(data.html==" "){
                 $(".ajax-load").html("No Data");
                 return ;
             }
             $("#post-data").append(data.html);
         });
     }
 
     // var page=1;
     // $(window).scroll(function(){
     //     if($(window).scrollTop()+$(window).height()>=$(document).height())
     //     {
     //         page++;
     //         load(page);
     //     }
     // });
 
     var page=1;
     $("#more").click(function(){
        console.log('mmmmmmm');
             page++;
             load(page,id);
     });
 
    function cliced(ids){
     //    $('.tagA').removeClass('active-filter');
     //    $(this).addClass('active-filter');
 
         console.log("test");
         // console.log($(this).class());
 //    var id=$(this).value();
 $("#post-data").html(' ');
              page=1;
              id=ids;
         console.log(id);
         $("#post-data").html('');
 
             load(page,id);
 
     }
     </script>
@include('client/footer')