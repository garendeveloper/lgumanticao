<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>LGU MANTICAO - USER LOGIN</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="admintemplate/css/bootstrap.min.css" />
		<link rel="stylesheet" href="admintemplate/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="admintemplate/css/maruti-login.css" />
<style>
    #loginbox .normal_text{
        background: #e4ad00 ;
    }
    #loginbox {
    overflow: hidden !important;
    text-align: center;
    position: relative;
}
    #loginbox .control-group {
    padding: 10px 0;
    border-bottom: 1px solid #f6f6f6;
    margin-bottom: 10px;
}

</style>
    </head>
    <body>
        <div id="loginbox">        
            <form id="loginform" method = "post" class="form-vertical" action="{{ url('/login_user') }}">
                @csrf
				 <div class="control-group normal_text"> <h3><img src="admintemplate/img/login-logo.png"  style = "height: 150px; " alt="Logo" /></h3></div>
                    @if(Session::has('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
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
            <!-- <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="admintemplate/#" class="flip-link btn btn-inverse" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-info" value="Recover" /></span>
                </div>
            </form> -->
        </div>
        
        <script src="admintemplate/js/jquery.min.js"></script>  
        <script src="admintemplate/js/maruti.login.js"></script> 
    </body>

</html>
