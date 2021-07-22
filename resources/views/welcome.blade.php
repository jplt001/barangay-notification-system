<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Baranggay Notification System</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('Theme/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('Theme/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="{{ asset('Theme/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('Theme/assets/css/style-responsive.css')}}" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<style type="text/css">
    body{
        font-family: Century Gothic;
    }
    .form-login h2.form-login-heading{
        background: #163b4e;
    }

    .btn-theme{
        background-color: #3fbbee;
        border-color: #163b4e;
    }

    .btn-theme:hover{
        background-color: #163b4e;
        border-color: #163b4e;

    }
</style>
  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      <div id="login-page">
        <div class="container">
        
              <form class="form-login" method="POST" action="{{ route('login') }}">
                <h2 class="form-login-heading">Welcom to {{ config('app.name', 'Laravel') }} Notification System<br><small style="color: white;">sign in now</small></h2>
                <div class="login-wrap">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="text" name="user_name" class="form-control" value="jplt001" placeholder="Username" autofocus  required="">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>                    
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" value="123456">
                         @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    

                    <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
        
                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                   </form>
                    
                   
        
                </div>
        
                  <!-- Modal -->
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Forgot Password ?</h4>
                              </div>
                              <div class="modal-body">
                                  <p>Enter your e-mail address below to reset your password.</p>
                                  <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
        
                              </div>
                              <div class="modal-footer">
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                  <button class="btn btn-theme" type="button">Submit</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- modal -->
        
                     
        
        </div>
      </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('Theme/assets/js/jquery.js')}}"></script>
    <script src="{{ asset('Theme/assets/js/bootstrap.min.js')}}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ asset('Theme/assets/js/jquery.backstretch.min.js')}}"></script>
    <script>
        $.backstretch("{{ asset('Theme/assets/img/login-bg.jpg')}}", {speed: 500});
    </script>


  </body>
</html>
