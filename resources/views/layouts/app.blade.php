<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Barangay {{ config('app.name', 'Laravel') }} Alert and Rescue</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('Theme/assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{ asset('Theme/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Theme/assets/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Theme/assets/js/gritter/css/jquery.gritter.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('Theme/assets/lineicons/style.css')}}">    
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('Theme/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('Theme/assets/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{ asset('Theme/assets/js/chart-master/Chart.js')}}"></script>
    <link href="{{ asset('Theme/assets/css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('css/datatables.css')}}" rel="stylesheet"/>
    <link href="{{ asset('plugins/datepicker/datepicker.css')}}" rel="stylesheet"/>
    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    
    <!-- <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script> -->
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
    .black-bg{
        background: #163b4e;
        color: white;
        border-bottom: 1px solid #0f2a38;
    }

    ul.top-menu > li > a{
     color: white;
    }

    ul.top-menu > li > a:hover{
     color: #3fbbee;
    }

    ul.sidebar-menu li a.active, ul.sidebar-menu li a:hover, ul.sidebar-menu li a:focus{
        background: #3fbbee;
    }

    .ds h3{
        background: #163b4e; 
    }

    .site-footer{
        background: #0d222d;
    }

    #sidebar{
        background: #0d222d;
    }

    ul.sidebar-menu li ul.sub li{
        background: #061117;
        color: white;
    }

    ul.top-menu > li > .logout{
        background: #3fbbee;
        border: 1px solid #163b4e !important;
    }

    ul.top-menu > li > .logout:hover{
        background: red;
        border: 1px solid #163b4e !important;
    }
</style>
  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{ url('/home') }}" class="logo"><b>{{ config('app.name', 'Laravel') }} Alert and Rescue</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li>
<a class="logout" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="{{ url('/') }}"><img src="{{ asset('Theme/assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
                  <h5 class="centered">{{ Auth::user()->name }}</h5>
                  <li class="mt"></li>
                  
                  @foreach($side_bars as $v)
                    
                  <li>
                      <a <?php if($side_active == $v->side_active_code) { echo 'class="active"' ;} ?> href="{{ url('/')}}/{{ $v->url }}">
                          <i class="fa {{$v->icon}}"></i>
                          <span>{{$v->title}}</span>
                      </a>
                  </li>
                  @endforeach
                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          @yield('content')
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              {{ date('Y') }} - Barangay {{ config("app.name", "Laravel") }} Notification System
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('Theme/assets/js/jquery.js')}}"></script>
    <script src="{{ asset('Theme/assets/js/jquery-1.8.3.min.js')}}"></script>
    <script src="{{ asset('Theme/assets/js/bootstrap.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{ asset('Theme/assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{ asset('Theme/assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{ asset('Theme/assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{ asset('Theme/assets/js/jquery.sparkline.js')}}"></script>


    <!--common script for all pages-->
    <script src="{{ asset('Theme/assets/js/common-scripts.js')}}"></script>
    
    <script type="text/javascript" src="{{ asset('Theme/assets/js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{ asset('Theme/assets/js/gritter-conf.js')}}"></script>

    <!--script for this page-->
    <script src="{{ asset('Theme/assets/js/sparkline-chart.js')}}"></script>    
    <script src="{{ asset('Theme/assets/js/zabuto_calendar.js')}}"></script>
    <script src="{{ asset('js/datatables.js')}}"></script>
    <script src="{{ asset('js/application.js')}}"></script>
    <script src="{{ asset('js/jquery.cookie.js')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datepicker/datepicker.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('node\node_modules\socket.io-client\dist\socket.io.js') }}"></script> -->
    <!-- <script src="http://localhost:3000/socket.io/socket.io.js"></script> -->
    <script src="{{ asset('js/socket.io.js')}}"></script>
    <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-auth.js"></script>
      <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-database.js"></script>
      <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-firestore.js"></script>
      <script src="https://www.gstatic.com/firebasejs/4.10.1/firebase-messaging.js"></script>
    <script type="text/javascript">
      var alertNewBarangayAlert = new Audio('{{asset("audio/notification.mp3")}}');
      // var r = confirm("test the notification");
      $('.datepicker').datepicker({
          format: 'mm/dd/yyyy',
          startDate: '-3d'
      });
      //var socket = io.connect('http://localhost:3000');
      

      

      // if(r){
        // socket.emit('new_incident_notifs', "test");
      // }

      // socket.on('new_incident_notifs', function(msg){
      //   var obj = JSON.parse(JSON.stringify(msg))
      //   alertNewBarangayAlert.play();
      //   var unique_id1 = $.gritter.add({
      //       // (string | mandatory) the heading of the notification
      //       title: 'New Incident has been reported!',
      //       // (string | mandatory) the text inside the notification
      //       text: obj.msg,
      //       // (string | optional) the image to display on the left
      //       image: '{{ asset("images/alarm.png")}}',
      //       // (bool | optional) if you want it to fade out on its own or just sit there
      //       sticky: true,
      //       // (int | optional) the time you want it to be alive for before fading out
      //       time: '1',
      //       // (string | optional) the class name you want to apply to that specific message
      //       class_name: 'my-sticky-class'
      //   });
      //   var datasss= '<div class="desc"> <div class="thumb"> <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span> </div> <div class="details"> <p><muted>{{date("h:i a")}}</muted><br/> New accident has been reported.<br/> </p> </div> </div>';
      //   console.log(datasss);
      //   // $('#myNoifications').append(datasss);

      // });
      
      // socket.connect();
    </script>
   <!--  <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
    <script>
      // Initialize Firebase
      // var config = {
      //   apiKey: "AIzaSyB74vIM4xUmatpyHd3OjG-rc0WFrV9vxiM",
      //   authDomain: "e-brgy-911.firebaseapp.com",
      //   databaseURL: "https://e-brgy-911.firebaseio.com",
      //   projectId: "e-brgy-911",
      //   storageBucket: "e-brgy-911.appspot.com",
      //   messagingSenderId: "765327540451"
      // };
      // firebase.initializeApp(config);
    </script> -->
    <!-- <script src="{{ asset('js/firebase.js')}}"></script> -->
    @yield('custom_js')
    <script type="text/javascript">
        $(document).ready(function () {
            if(module == 'home'){
              var myNewOpened = $.cookie('new_opened');
              if(typeof myNewOpened == "undefined" ){
                $.cookie('new_opened', 1, { expires: 10 });  
              }else{
                var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification
                    title: 'Welcome to E-Brgy 911:  Barangay {{ config("app.name", "Laravel") }} Alert and Rescue!',
                    // (string | mandatory) the text inside the notification
                    text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
                    // (string | optional) the image to display on the left
                    image: '{{ asset("images/favicon.ico")}}',
                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: true,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: '',
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                }); 
                
              }
                
            }
        

        return false;
        });
    </script>
    
    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
