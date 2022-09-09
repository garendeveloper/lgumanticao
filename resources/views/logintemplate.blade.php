<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>LGU - Manticao Accounting System</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="login_template/css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="login_template/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<style>
    body{
        font-family: 'Segoe UI'
    }
</style>
<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo" style = "font-family: Cascadia Code SemiBold"><span>LGU - Manticao Accounting System</span></span></h1>
		</div>
		<div class="login-box animated fadeIn">
			<div class="box-header">
				<h2>USER Log In</h2>
			</div>
            <form id="loginform" method = "post" class="form-vertical" action="{{ url('/login_user') }}">
                @csrf
				 <div class="control-group normal_text"> <h3><img src="admintemplate/img/login-logo.png"  style = "height: 120px; " alt="Logo" /></h3></div>
                    @if(Session::has('fail'))
                        <div class="alert alert-danger" style = "color: red">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
					@if(Session::has('Fails'))
                        <div class="alert alert-danger" style = "color: red">
                            {{ Session::get('Fails') }}
                        </div>
                    @endif
                    <br>

                 <div class="control-group">
                    <div class="controls" >
                        <div class="main_input_box ">
                            <span class="add-on"><i class="icon-user"></i></span><input   type="text" value = "{{old('username')}}" name = "username" autocomplete = "off" placeholder="Username" required/>
                        </div>
                        @if($errors->has('username'))
                            <span style = "color: red">{{ $errors->first('username')}}</span>
                        @endif
                    </div>
                   
                </div>
                <div class="control-group form-control">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input  name = "password" type="password" placeholder="Password" required/>
                        </div>
               
                    </div>
                    @if($errors->has('password'))
                    <span style = "color: red">{{ $errors->first('password')}}</span>
                    @endif
                </div>
                <div class="form-actions">
                    <!-- <span class="pull-left"><a href="admintemplate/#" class="flip-link btn btn-inverse" id="to-recover">Lost password?</a></span> -->
                    <span ><input type="submit" class="btn btn-block btn-success" value="Login" /></span>
                </div>
            </form>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>