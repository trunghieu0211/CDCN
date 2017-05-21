@include('layouts.header')
@include('modules.menu')
	<div class="container">     
	  	<div class="row">   
			@yield('content')
			{{-- @include('modules.gioithieu') --}}
	  	</div>       <!-- /row -->
	</div> <!-- /container -->
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=245413372605766";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@include('layouts.footer')