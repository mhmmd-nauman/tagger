<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! env('PROJECT_NAME') !!}-{!! env('APP_NAME') !!} System </title>
    <!-- Fonts --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('js/DataTables-1.10.13/media/css/jquery.dataTables.css') }}" >
    <!--
    <link rel="stylesheet" type="text/css" href="{{ asset('js/DataTables-1.10.13/examples/resources/syntax/shCore.css') }}">
     
    <link rel="stylesheet" type="text/css" href="{{ asset('js/DataTables-1.10.13/examples/resources/demo.css') }}">
    -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}" ></script>
    
    <script src="{{ asset('js/DataTables-1.10.13/media/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/DataTables-1.10.13/examples/resources/syntax/shCore.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/DataTables-1.10.13/examples/resources/demo.js') }}"></script>
    
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.12.1/jquery-ui.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('js/jquery-ui-1.12.1/jquery-ui.css') }}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
        .navbar-default{
            background-color: #d43f3a;
            margin: 5px;
            color: white;
        }
        .navbar-nav-link { color: white;}
        .top_bar {
            background-color: #d43f3a;
        }
    </style>
</head>
<body>
    
    <div class="container" >
            <div class="row">
                <div class="col-md-12 top_bar" >
                    
                    <nav class = "navbar navbar-default col-md-9" role = "navigation">
   
                    <div class = "navbar-header">
                       <a class = "navbar-brand" href = "{{url('/')}}" style="color:white;">{!! env('PROJECT_NAME') !!}-{!! env('APP_NAME') !!}</a>
                    </div>

                    <div>
                       <ul class = "nav navbar-nav pull-right">
                           
                          
                          <li class = "dropdown">
                             <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                Key Setting
                                <b class = "caret"></b>
                             </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/key_settings')}}">API Key Setting</a></li>
                                
                            </ul>
                           </li>
                          
                           <li class = "dropdown">
                             <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                Tools 
                                <b class = "caret"></b>
                             </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/tagger')}}">Tagger</a></li>
                            </ul>
                           </li>
                          

                       </ul>
                    </div>

                 </nav>
                     
                
                    <ul class = "nav  navbar-default pull-right" role = "navigation">
                        @if (Auth::guest())
                        <li class = "dropdown">
                             <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                My Account
                                <b class = "caret"></b>
                             </a>

                             <ul class = "dropdown-menu">
                                <li><a href="{{ url('/login') }}"> Login</a></li>
                                
                                <li class = "divider"></li>
                                
                                <li><a href="{{ url('/register') }}" > Register</a></li>
                             </ul>

                          </li>
                          @else
                          <li class = "dropdown">
                              <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                {{ Auth::user()->name }}
                                <b class = "caret"></b>
                             </a>

                             <ul class = "dropdown-menu">
                                <li><a href = "#">My Profile</a></li>
                                
                                <li class = "divider"></li>
                                <li><a href="{{ url('/logout') }}" >Logout</a></li>
                             </ul>

                          </li>
                          @endif
                    </ul>
                    
                    
                </div>
            </div>
        <br>
        
        <?php //echo var_dump(request()->all()); ?>
              
               @if (Request::has('success'))
                <div class="alert alert-info">
                    <ul>
                        <li>{{ Request::get('message') }}</li>
                    </ul>
                </div>
            @endif
            @yield('content')
            </div>
   

    <!-- JavaScripts -->
    
    
    
</body>
</html>