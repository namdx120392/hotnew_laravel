<!DOCTYPE html>
<html lang="en-us" id="lock-page">
	<head>
		<meta charset="utf-8">
		<title> Thang máy Mạnh Tiến </title>
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		{!! Html::style('css/bootstrap.min.css') !!}
		{!! Html::style('css/font-awesome.min.css') !!}
		{!! Html::style('css/smartadmin-production.min.css') !!}
		{!! Html::style('css/smartadmin-skins.min.css') !!}
		{!! Html::style('css/demo.min.css') !!}
		{!! Html::style('css/lockscreen.min.css') !!}
		{!! Html::style('css/your_style.css') !!}

		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

	</head>
	<body>
		<div id="main" role="main">
			<!-- MAIN CONTENT -->
			{!! Form::open(array(
				'id' => 'submit_form',
				'class' => 'lockscreen animated flipInY',
				'method' => 'POST',
				'url'=> route('login_post')
			)) !!}
				<div class="logo">
					<h1 class="semi-bold">{!! Html::image('img/logo-o.png', 'SmartAdmin') !!} Thang máy Mạnh Tiến</h1>
				</div>
				<div>
					<div>
						<h1><i class="fa fa-user fa-3x text-muted air air-top-right hidden-mobile">
						</i>Đăng nhập <small><i class="fa fa-lock text-muted"></i> &nbsp;quản trị website</small></h1><br/>
						<div class="form-group input-group">
							<input class="form-control" name="email" id="email" type="email" placeholder="Email">
							<div class="input-group-btn submit-icon">
								<span class="btn btn-primary">
									<i class="fa fa-mail-forward"></i>
								</span>
							</div>
						</div>
						<div class="form-group input-group">
							<input class="form-control" name="password" type="password" placeholder="Mật khẩu">
							<div class="input-group-btn submit-icon">
								<span class="btn btn-primary">
									<i class="fa fa-key"></i>
								</span>
							</div>
						</div>
						<div class="form-group input-group">
							<button type="submit" class="btn btn-success">Đăng nhập</button>
						</div>
					</div>
				</div>
				<p class="font-xs margin-top-5">Copyright ManhTien 2018.</p>
			{!! Form::close() !!}

		</div>

		{!! Html::script('js/plugin/pace/pace.min.js') !!}
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	    {!! Html::script('') !!}
		<script> if (!window.jQuery) { document.write('<script src="{{URL::to("js/libs/jquery-2.0.2.min.js")}}"><\/script>');} </script>

	    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script> if (!window.jQuery.ui) { document.write('<script src="{{URL::to("js/libs/jquery-ui-1.10.3.min.js")}}"><\/script>');} </script>

		{!! Html::script('js/bootstrap/bootstrap.min.js') !!}
		{!! Html::script('js/plugin/jquery-validate/jquery.validate.min.js') !!}
		{!! Html::script('js/plugin/masked-input/jquery.maskedinput.min.js') !!}
		{!! Html::script('js/app.min.js') !!}

		<script type="text/javascript">
			$('.submit-icon').click(function(){
				return false;
			});
			$('#email').focus();
		</script>

	</body>
</html>