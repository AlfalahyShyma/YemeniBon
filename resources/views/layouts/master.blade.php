<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>YemeniBon Dashboard</title>

    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Favicons -->
    <link href="{{asset('img/title.png')}} " rel="icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
    <!--external css-->

    <link href="{{asset('lib/font-awesome/css/font-awesome.css')}} " rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}} ">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}} " />
    <!-- Custom styles for this template -->
    <!-- <link href= "{{asset('css/style.css')}} " rel="stylesheet"> -->
    <link href="{{asset('css/style-responsive.css')}} " rel="stylesheet">
    <script src="{{asset('lib/chart-master/Chart.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/9u2s157ky8rkolywf0bev3ctozq7eqoii8frq84vla96spst/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/jaca90/pen/vZJZMx?depth=everything&order=popularity&page=10&q=statistics&show_forks=false" />

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src='https://cdn.tiny.cloud/1/qkbq5pwxe3od1v11ql7vye8j3n3khkeglzvtvfx5nwx4c5fo/tinymce/5/tinymce.min.js' referrerpolicy="origin">
  </script>

    <link rel="stylesheet" href="{{asset(__('sidebar.css_file') )}}">


  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/9u2s157ky8rkolywf0bev3ctozq7eqoii8frq84vla96spst/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
selector: '#mytextarea_ar',
language_url : '/langs/ar.js',
height : "480",
language: 'ar',
directionality: 'rtl',
plugins: 'tinydrive image advlist lists imagetools code table paste link emoticons searchreplace advlist checklist hr charmap directionality',
toolbar: 'insertfile undo redo  image  | table | link | emoticons | styleselect | bold italic |  alignleft aligncenter alignright alignjustify  bullist numlist outdent indent forecolor backcolor ',
toolbar_mode: 'floating',
tinydrive_token_provider: '/jwt',
tinydrive_google_drive_key: 'AIzaSyCHMZOXHcLPfXTVJ5Liyoj4lH5QudJ3peo',
tinydrive_google_drive_client_id: '896303365657-k5s6nf93jmkl01cam9om7eo1lps5oa2m.apps.googleusercontent.com',
tinydrive_dropbox_app_key:'sl.Asi_IGM54fd8Itqej2Q_XOghg2y1NkmNJZ-Z9BcqohW0sdxzaDZ8TvD0yN9qvnev8RpRAwEmneEmAp9kH1o7BZZnWR-CDe-8blWNyiwlD2UnIQDCbO_a6yHbWQcZ0RZH1oOuXyU',
menu: {
favs: {title: 'المفضلة', items: '   searchreplace | emoticons'}
},
menubar: 'favs edit view insert format  help',
/* enable title field in the Image dialog*/
image_title: true,
/* enable automatic uploads of images represented by blob or data URIs*/
automatic_uploads: true,
/*
URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
images_upload_url: 'postAcceptor.php',
here we add custom filepicker only to Image dialog
*/
file_picker_types: 'image',
/* and here's our custom image picker*/
file_picker_callback: function (cb, value, meta) {
var input = document.createElement('input');
input.setAttribute('type', 'file');
input.setAttribute('accept', 'image/*');
input.setAttribute('accept', 'file/*');

/*
  Note: In modern browsers input[type="file"] is functional without
  even adding it to the DOM, but that might not be the case in some older
  or quirky browsers like IE, so you might want to add it to the DOM
  just in case, and visually hide it. And do not forget do remove it
  once you do not need it anymore.
*/

input.onchange = function () {
  var file = this.files[0];

  var reader = new FileReader();
  reader.onload = function () {
    /*
      Note: Now we need to register the blob in TinyMCEs image blob
      registry. In the next release this part hopefully won't be
      necessary, as we are looking to handle it internally.
    */
    var id = 'blobid' + (new Date()).getTime();
    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
    var base64 = reader.result.split(',')[1];
    var blobInfo = blobCache.create(id, file, base64);
    blobCache.add(blobInfo);

    /* call the callback and populate the Title field with the file name */
    cb(blobInfo.blobUri(), { title: file.name });
  };
  reader.readAsDataURL(file);
};

input.click();
},
content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

  
</script>

<script>
  tinymce.init({
selector: '#mytextarea',
language_url : '/langs/en.js',
height : "480",
language: 'en',
directionality: 'ltr',
plugins: 'tinydrive image advlist lists imagetools code table paste link emoticons searchreplace advlist checklist hr charmap directionality',
toolbar: 'insertfile undo redo  image  | table | link | emoticons | styleselect | bold italic |  alignleft aligncenter alignright alignjustify  bullist numlist outdent indent forecolor backcolor ',
toolbar_mode: 'floating',
tinydrive_token_provider: '/jwt',
tinydrive_google_drive_key: 'AIzaSyCHMZOXHcLPfXTVJ5Liyoj4lH5QudJ3peo',
tinydrive_google_drive_client_id: '896303365657-k5s6nf93jmkl01cam9om7eo1lps5oa2m.apps.googleusercontent.com',
tinydrive_dropbox_app_key:'sl.Asi_IGM54fd8Itqej2Q_XOghg2y1NkmNJZ-Z9BcqohW0sdxzaDZ8TvD0yN9qvnev8RpRAwEmneEmAp9kH1o7BZZnWR-CDe-8blWNyiwlD2UnIQDCbO_a6yHbWQcZ0RZH1oOuXyU',
menu: {
favs: {title: 'المفضلة', items: '   searchreplace | emoticons'}
},
menubar: 'favs edit view insert format  help',
/* enable title field in the Image dialog*/
image_title: true,
/* enable automatic uploads of images represented by blob or data URIs*/
automatic_uploads: true,
/*
URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
images_upload_url: 'postAcceptor.php',
here we add custom filepicker only to Image dialog
*/
file_picker_types: 'image',
/* and here's our custom image picker*/
file_picker_callback: function (cb, value, meta) {
var input = document.createElement('input');
input.setAttribute('type', 'file');
input.setAttribute('accept', 'image/*');
input.setAttribute('accept', 'file/*');

/*
  Note: In modern browsers input[type="file"] is functional without
  even adding it to the DOM, but that might not be the case in some older
  or quirky browsers like IE, so you might want to add it to the DOM
  just in case, and visually hide it. And do not forget do remove it
  once you do not need it anymore.
*/

input.onchange = function () {
  var file = this.files[0];

  var reader = new FileReader();
  reader.onload = function () {
    /*
      Note: Now we need to register the blob in TinyMCEs image blob
      registry. In the next release this part hopefully won't be
      necessary, as we are looking to handle it internally.
    */
    var id = 'blobid' + (new Date()).getTime();
    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
    var base64 = reader.result.split(',')[1];
    var blobInfo = blobCache.create(id, file, base64);
    blobCache.add(blobInfo);

    /* call the callback and populate the Title field with the file name */
    cb(blobInfo.blobUri(), { title: file.name });
  };
  reader.readAsDataURL(file);
};

input.click();
},
content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

  
</script>
  </head>

<body class="sidebar-is-reduced sidebar-is-expanded">
  <header class="l-header">
   
    <div class="l-header__inner clearfix">
     
      
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">

            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a style="font-size:14px; height:4.7vh; border:0; line-height:20px;" rel="alternate"
                    hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
            @endforeach

            <!-- notification dropdown end -->




        </ul>
        <!--  notification end -->
    </div>
    
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li>
                <!-- Authentication
                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                 
                   <form method="POST" action="{{ route('logout') }}" class="logout">
                    @csrf

                    <x-jet-dropdown-link href="{{ route('logout') }}" style="color:white;"
                             onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-dropdown-link>
                </form> -->

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            
                        </x-slot>

                        <x-slot name="content">

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            
                           
                        </x-slot>
                    </x-jet-dropdown>
                </div>
    </div>
    <form method="POST" action="{{ route('logout') }}">
      @csrf

      <div class="header-icons-group" href="{{ route('logout') }} "
      onclick="event.preventDefault();
             this.closest('form').submit();">
            <div class="c-header-icon logout"><a ><i class="fa fa-power-off text-black"></i>Logout</a></div>
                </div>
              </form>
    </div>
  </header>
  <div class="l-sidebar">
    <div class="logo">
      <div class="logo__txt">
        <p class="centered"><a href="profile.html"><img
            src="{{asset('img/YemeniBon_Logo_Watercolor-01.png')}}" class="img-circle"
            width="50"></a></p>
      </div>
    </div>
    <div class="l-sidebar__content">
      <nav class="c-menu js-menu">
          
        <ul class="u-list">
          <li class="c-menu__item is-active" data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-dashboard"></i>
             
            <a class="tagA " href="{{asset('/dashboard')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.dashboard_page')}}</span>
                </div>
                </a>
        </div>
          </li>

          <li class="c-menu__item  has-submenu" data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-picture-o color"></i>
             
            <a class="tagA " href="{{asset('admin/banners/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.Banner_page')}}</span>
                </div>
                </a>
        </div>
          </li>



          <li class="c-menu__item has-submenu " data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-picture-o color"></i>
             
            <a class="tagA " href="{{asset('/about/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.about')}}</span>
                </div>
                </a>
        </div>
          </li>


          <li class="c-menu__item has-submenu " data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-list color"></i>
             
            <a class="tagA " href="{{asset('admin/catatypes/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.categorytype_page')}}</span>
                </div>
                </a>
        </div>
          </li>

          <li class="c-menu__item  has-submenu" data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-list-alt color"></i>
             
            <a class="tagA " href="{{asset('admin/categories/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.category_page')}}</span>
                </div>
                </a>
        </div>
          </li>

          <li class="c-menu__item has-submenu " data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-desktop color"></i>
             
            <a class="tagA " href="{{asset('admin/projects/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.Projects_page')}}</span>
                </div>
                </a>
        </div>
          </li>

          <li class="c-menu__item has-submenu " data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-tasks color"></i>
             
            <a class="tagA " href="{{asset('admin/articles/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.Article')}}</span>
                </div>
                </a>
        </div>
          </li>

          <li class="c-menu__item has-submenu " data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-tasks color"></i>
             
            <a class="tagA " href="{{asset('admin/interviews/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.Interview')}}</span>
                </div>
                </a>
        </div>
          </li>

          <li class="c-menu__item has-submenu " data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-tasks color"></i>
             
            <a class="tagA " href="{{asset('admin/Pdfs/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.Pdf')}}</span>
                </div>
                </a>
        </div>
          </li>

          <li class="c-menu__item has-submenu " data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-cogs color"></i>
             
            <a class="tagA " href="{{asset('admin/configrations/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.Configrations_page')}}</span>
                </div>
                </a>
        </div>
          </li>

          <li class="c-menu__item has-submenu " data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-cogs color"></i>
             
            <a class="tagA " href="{{asset('admin/contactinfos/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.contactInfo')}}</span>
                </div>
                </a>
        </div>
          </li>

          <li class="c-menu__item has-submenu " data-toggle="tooltip" title="Flights">
            <div class="c-menu__item__inner"><i class="fa fa-user color"></i>
             
            <a class="tagA " href="{{asset('admin/users/index')}}">
                <div class="c-menu-item__title"><span class="c-menu-item__title">{{__('sidebar.Admin_Users_page')}}</span>
                </div>
                </a>
        </div>
          </li>


          
         
         
          
        </ul>
      </nav>
    </div>
  </div>
</body>
<main class="l-main">
    <div class="content-wrapper content-wrapper--with-bg">
      <div class="page-content">
          @yield('content')
  
      </div>
    </div>
  </main>

@push('scripts')

<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>

<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}} "></script>
<script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}} "></script>
<script src="{{asset('lib/jquery.scrollTo.min.js')}} "></script>
<script src="{{asset('lib/jquery.nicescroll.js')}} " type="text/javascript"></script>
<script src="{{asset('lib/jquery.sparkline.js')}} "></script>
<script src="{{asset('lib/common-scripts.js')}} "></script>
<script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js')}} "></script>
<script type="text/javascript" src="{{asset('lib/gritter-conf.js')}} "></script>
<script src="{{asset('lib/zabuto_calendar.js')}} "></script>
<script src="{{asset('js/app.js')}} "></script>
<script src="{{asset('lib/sparkline-chart.js')}} "></script>

<script src="{{asset('js/newJs.js')}} "></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>

<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://use.fontawesome.com/2188c74ac9.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

<script>"use strict";
var Dashboard = function () {
	var global = {
		tooltipOptions: {
			placement: "right"
		},
		menuClass: ".c-menu"
	};

	var menuChangeActive = function menuChangeActive(el) {
		var hasSubmenu = $(el).hasClass("has-submenu");
		$(global.menuClass + " .is-active").removeClass("is-active");
		$(el).addClass("is-active");

		if (hasSubmenu) {
			$(el).find("ul").slideDown();
		}
	};


	return {
		init: function init() {

			$(".js-menu li").on("click", function (e) {
				menuChangeActive(e.currentTarget);
			});

			$('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
		}
	};
}();

Dashboard.init();
//# sourceURL=pen.js
</script>
@endpush

</body></html>