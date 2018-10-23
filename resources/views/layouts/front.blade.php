@include('layouts/fronts/header')
	<!-- MAIN PANEL -->
	<div id="page" class="home-page">
		@yield('content')		
		@include('layouts/fronts/slide-partner')
	</div>
	<!-- PAGE FOOTER -->
@include('layouts/fronts/footer')