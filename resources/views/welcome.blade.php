
       {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                <a href="{{ url('admin/login') }}">Admin Login</a>
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<div class="container">
    <div class="row">

    </div>
</div>
        </div>--}}

        <!doctype html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
                <head>
            <meta charset="UTF-8">
            <title>Jays trucks</title>
            <meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
            <meta name="author" content="Web Domus Italia">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

             <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

            <link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
            <link rel="stylesheet" type="text/css" href="style/slider.css">
            <link rel="stylesheet" type="text/css" href="style/mystyle.css">
        </head>
        <body>
        <!-- Header -->
        <div class="allcontain">
            <div class="header">
                    <ul class="givusacall">
                        <li>Give us a call : +25470000000 </li>
                    </ul>
                    <ul class="logreg">
                            @if (Route::has('login'))
                            @auth
                            <li><a href="{{ url('admin/login') }}">Admin Login </a> </li>
                            @else
                        <li><a href="{{ url('admin/login') }}">Admin Login </a> </li>
                        <li><a href="{{ route('login') }}">Login </a> </li>

                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}"><span class="register">Register</span></a></li>
                        @endif
                        @endauth
                        @endif
                    </ul>
            </div>
            <div class="feturedsection">
                <h1 class="text-center"><span class="bdots">&bullet;</span>JAYS TRUCKS RENTALS&bullet;</h1>
            </div>
            <!-- Navbar Up -->
            <nav class="topnavbar navbar-default topnav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                            <span class="sr-only"> Toggle navigaion</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>	 
                </div>
                <div class="collapse navbar-collapse" id="upmenu">
                    <ul class="nav navbar-nav" id="navbarontop">
                        
                    </ul>
                </div>
            </nav>
        </div>
       
        <!--_______________________________________ Carousel__________________________________ -->
        <div class="allcontain">
            <div id="carousel-up" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner " role="listbox">
                    <div class="item active">
                        <img src="image/oldcar.jpg" alt="oldcar">
                        <div class="carousel-caption">
                            <h2></h2>
                            <p><br>
                             </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/porche.jpg" alt="porche">
                        <div class="carousel-caption">
                            <h2>Porche</h2>
                                <p><br>
                                 </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="image/benz.jpg" alt="benz">
                        <div class="carousel-caption">
                            <h2></h2>
                            <p><br>
                               </p>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        <!-- ____________________Featured Section ______________________________--> 
        <div class="allcontain">
            <div class="feturedsection">
                <h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E D<span class="carstxt">C A R S</span>&bullet;</h1>
            </div>
            <div class="feturedimage">
                <div class="row firstrow">
                    <div class="col-lg-6 costumcol colborder1">
                        <div class="row costumrow">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                                <img src="image/featurporch.jpg" alt="porsche">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                                <div class="featurecontant">
                                    <h1></h1>
                                    <p><br>
                                              </p>
                                     <h2> </h2>
                                     <div id="readmore">
                                             <h1> </h1>
                                             <p><br>
                                            <br><br>
                                          <br>
                                             </p>
                                             <button id="btnRL"></button>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 costumcol colborder2">
                        <div class="row costumrow">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                                <img src="image/featurporch1.jpg" alt="porsche1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                                <div class="featurecontant">
                                    <h1></h1>
                                    <p><br>
                                       </p>
                                     <h2> </h2>
                                     <div id="readmore2">
                                             <h1></h1>
                                             <p><br>
                                             <br><br>
                                             <br></p>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ________________________LATEST CARS SECTION _______________________-->
        <div class="latestcars">
            <h1 class="text-center">&bullet; LATEST   CARS &bullet;</h1>

        </div>
        <br>
        <br>
        <!-- ________________________Latest Cars Image Thumbnail________________-->
            <div class="grid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="txthover">
                            <img src="image/car1.jpg" alt="car1">
                                <div class="txtcontent">
                                  
                                    <div class="simpletxt">
                                        <h3 class="name">Rolls Royce</h3>
                                        <p><br>
                                          </p>
                                         <h4 class="price"> 1000 Ksh / day</h4>
                                         <div class="wishtxt">
                                             <p class="paragraph1">  <span class="glyphicon glyphicon-heart"></span> </p>
                                             <p class="paragraph2"> <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                         </div>
                                    </div>
                               
                                </div>
                        </div>	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
                        <div class="txthover">
                            <img src="image/car2.jpg" alt="car2">
                                <div class="txtcontent">
                                 
                                    <div class="simpletxt">
                                        <h3 class="name">Renault</h3>
                                        <p><br>
                                         </p>
                                         <h4 class="price">900 Ksh / day</h4>
                                         <div class="wishtxt">
                                             <p class="paragraph1"> <span class="glyphicon glyphicon-heart"></span> </p>
                                             <p class="paragraph2"> <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                         </div>
                                    </div>
                                  
                                </div>
                        </div>	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="txthover">
                            <img src="image/car3.jpg" alt="car3">
                                <div class="txtcontent">
                                
                                    <div class="simpletxt">
                                        <h3 class="name">Ford Mustang</h3>
                                        <p><br>
                                       </p>
                                         <h4 class="price">3000 Ksh per / day</h4>
                                         <div class="wishtxt">
                                             <p class="paragraph1">  <span class="glyphicon glyphicon-heart"></span> </p>
                                             <p class="paragraph2"> <span class="icon"><img src="image/compicon.png" alt="compicon"></span></p>
                                         </div>
                                    </div>
                              
                                </div>
                        </div>	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="txthover">
                            <img src="image/car4.jpg" alt="car4">
                                <div class="txtcontent">
                                    <div class="stars">
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                    </div>
                                    <div class="simpletxt">
                                        <h3 class="name">Rover</h3>
                                        <p><br>
                                         </p>
                                         <h4 class="price">1000 Ksh per / day</h4>
                                      
                                    </div>
                                  
                                </div>
                        </div>	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="txthover">
                            <img src="image/car5.jpg" alt="car5">
                                <div class="txtcontent">
                                    <div class="stars">
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                    </div>
                                    <div class="simpletxt">
                                        <h3 class="name">Porche</h3>
                                        <p><br>
                                          </p>
                                         <h4 class="price">1200 Ksh per / day</h4>
                                         <div class="wishtxt">
                                         </div>
                                    </div>
                                   
                                </div>
                        </div>	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="txthover">
                            <img src="image/car6.jpg" alt="car6">
                                <div class="txtcontent">
                                    <div class="stars">
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                    </div>
                                    <div class="simpletxt">
                                        <h3 class="name">Porche 911</h3>
                                        <p><br>
                                          </p>
                                         <h4 class="price">4000 Ksh per / day</h4>
                                    
                                    </div>
                                    <div class="stars2">
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                    </div>
                                </div>
                        </div>	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="txthover">
                            <img src="image/car7.jpg" alt="car7">
                                <div class="txtcontent">
                                    <div class="stars">
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                    </div>
                                    <div class="simpletxt">
                                        <h3 class="name">Chevrolet SS</h3>
                                        <p><br>
                                        </p>
                                         <h4 class="price">3000 Ksh per / day</h4>
                                       
                                    </div>
                                    <div class="stars2">
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                    </div>
                                </div>
                        </div>	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="txthover">
                            <img src="image/car8.jpg" alt="car8">
                                <div class="txtcontent">
                                    <div class="stars">
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                    </div>
                                    <div class="simpletxt">
                                        <h3 class="name">Meclaren</h3>
                                        <p><br>
                                          </p>
                                         <h4 class="price">2500 Ksh per / day</h4>
                                  
                                    </div>
                                    <div class="stars2">
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                        <div class="glyphicon glyphicon-star"></div>
                                    </div>
                                </div>
                        </div>	 
                    </div>	
                </div>
            </div>
       
        </div>
        
        <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
        <script type="text/javascript" src="source/js/isotope.js"></script>
        <script type="text/javascript" src="source/js/myscript.js"></script> 
        <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
        <script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
        </body>
        </html>