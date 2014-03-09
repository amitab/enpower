<!DOCTYPE html>
<!-- saved from url=(0053)http://getbootstrap.com/2.3.2/examples/carousel.html# -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>E&ntilde-Power</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->

    <link href={{URL::asset( "css/component.css")}} rel="stylesheet">
    <link href={{URL::asset( "css/modernizr.custom.js")}} rel="script">
    <link href={{URL::asset( "css/bootstrap.css")}} rel="stylesheet">
    <link href={{URL::asset( "css/login.css")}} rel="stylesheet">
    <link href={{URL::asset( "css/card.css")}} rel="stylesheet">
    <link href={{URL::asset( "css/bootstrap-responsive.css")}} rel="stylesheet">
    <link href={{URL::asset( "css/search.css")}} rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <link rel="stylesheet" href={{ URL::asset( "css/s1.css") }}>
    <script src="js/card.js"></script>
    <style>
        /* GLOBAL STYLES
        -------------------------------------------------- */
        /* Padding below the footer and lighter body text */
        @import url(http://fonts.googleapis.com/css?family=Open+Sans);
        body {
          padding-bottom: 40px;
          color: white;
          background-color: #FF6F69;
    
        }
        .pg_rt
    {
      margin-top: 10px;
      padding-right: 50px;
      text-align: right;
    }
       .fancy
       {
        font-family: 'Open Sans', sans-serif;
        color:#B8860B;
        display: block;
       }
    
    
        /* CUSTOMIZE THE NAVBAR
        -------------------------------------------------- */
    
        /* Special class on .container surrounding .navbar, used for positioning it into place. */
        .navbar-wrapper {
          padding-bottom: 20px;
          
          top: 0;
          left: 0;
          right: 0;
          z-index: 10;
          margin-top: 20px;
           /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
        }
        .navbar-wrapper .navbar {
    
        }
    
        /* Remove border and change up box shadow for more contrast */
        .navbar .navbar-inner {
          border: 0;
          -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
             -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
                  box-shadow: 0 2px 10px rgba(0,0,0,.25);
        }
    
        /* Downsize the brand/project name a bit */
        .navbar .brand {
          padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
          font-size: 16px;
          font-weight: bold;
          text-shadow: 0 -1px 0 rgba(0,0,0,.5);
        }
    
        /* Navbar links: increase padding for taller navbar */
        .navbar .nav > li > a {
          padding: 15px 20px;
        }
    
        /* Offset the responsive button for proper vertical alignment */
        .navbar .btn-navbar {
          margin-top: 10px;
        }
    
    
    
        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */
    
        /* Carousel base class */
        .carousel {
          margin-bottom: 60px;
          padding-left: 60px;
           padding-right: 60px;
           margin-top: 100px;
           height: 400px;
        }
    
        .carousel .container {
          position: relative;
          z-index: 9;
        }
    
        .carousel-control {
          height: 80px;
          margin-top: 0;
          font-size: 120px;
          text-shadow: 0 1px 1px rgba(0,0,0,.4);
          background-color: transparent;
          border: 0;
          z-index: 10;
        }
    
        .carousel .item {
          height: 400px;
        }
        .carousel img {
          position: absolute;
          top: 0;
          left: 0;
          min-width: 100%;
          height: 500px;
        }
    
        .carousel-caption {
          background-color: transparent;
          position: static;
          
          padding: 0 20px;
          margin-top: 200px;
        }
        .carousel-caption h1,
        .carousel-caption .lead {
          margin: 0;
          line-height: 1.25;
          color: #fff;
          text-shadow: 0 1px 1px rgba(0,0,0,.4);
        }
        .carousel-caption .btn {
          margin-top: 10px;
        }
    
    
    
        /* MARKETING CONTENT
        -------------------------------------------------- */
    
        /* Center align the text within the three columns below the carousel */
        .marketing .span4 {
          text-align: center;
          -webkit-box-shadow: 9px 8px 16px 0px rgba(57, 50, 50, 0.2);
         -moz-box-shadow:    9px 8px 16px 0px rgba(57, 50, 50, 0.2);
          box-shadow:         9px 8px 16px 0px rgba(57, 50, 50, 0.2);
          background:#FFCC5C;
          color: white;
    
        }
        .marketing h2 {
          font-weight: normal;
        }
        .marketing .span4 p {
          margin-left: 10px;
          margin-right: 10px;
        }
    
    
        /* Featurettes
        ------------------------- */
    
        .featurette-divider {
          margin: 80px 0; /* Space out the Bootstrap <hr> more */
        }
        .featurette {
           /* Vertically center images part 1: add padding above and below text. */
          overflow: hidden; /* Vertically center images part 2: clear their floats. */
        }
        .featurette-image {
          
          width:400px;
          height:300px;/* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
        }
    
        /* Give some space on the sides of the floated elements so text doesn't run right into it. */
        .featurette-image.pull-left {
          margin-right: 40px;
        }
        .featurette-image.pull-right {
          margin-left: 40px;
        }
    
        /* Thin out the marketing headings */
        .featurette-heading {
          font-size: 50px;
          font-weight: 300;
          line-height: 1;
          letter-spacing: -1px;
        }
    
    
    
        /* RESPONSIVE CSS
        -------------------------------------------------- */
    
        @media (max-width: 979px) {
    
          .container.navbar-wrapper {
            margin-bottom: 0;
            width: auto;
          }
          .navbar-inner {
            border-radius: 0;
            margin: -20px 0;
          }
    
          .carousel .item {
            height: 500px;
          }
          .carousel img {
            width: auto;
            height: 500px;
          }
    
          .featurette {
            height: auto;
            padding: 0;
          }
          .featurette-image.pull-left,
          .featurette-image.pull-right {
            display: block;
            float: none;
            max-width: 30%;
            margin: 0 auto 20px;
          }
        }
    
    
        @media (max-width: 767px) {
          .img
          {
            margin-top: 20px;
          }
          .navbar-inner {
            margin: -20px;
          }
    
          .carousel {
            margin-left: -20px;
            margin-right: -20px;
          }
          .carousel .container {
    
          }
          .carousel .item {
            height: 300px;
          }
          .carousel img {
            height: 300px;
          }
          .carousel-caption {
            width: 65%;
            padding: 0 70px;
            margin-top: 100px;
          }
          .carousel-caption h1 {
            font-size: 30px;
          }
          .carousel-caption .lead,
          .carousel-caption .btn {
            font-size: 18px;
          }
         
          .marketing .span4 + .span4 {
            margin-top: 40px;
          }
    
          .featurette-heading {
            font-size: 20px;
          }
          .featurette .lead {
            font-size: 18px;
            line-height: 1.5;
          }
    
        }
        .spa
        .mhead
        {
       display: block;
    
        }
        .mains
        {
    display: block;
        }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://getbootstrap.com/2.3.2/assets/ico/favicon.png">
    <style id="holderjs-style" type="text/css">
        .holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}
    </style>
</head>

<body>



    <!-- NAVBAR
    ================================================== -->
    <div>
        <div class="container">
            <div class="pull-right" style="margin-top: -10px;">
    
                <p style="margin-bottom: 10px;">Hello, {{ $userName }}</p>
                 <div class="container" style="
    margin-top: 0;
    height: auto;
"><div class="pg_rt" style="
    display: inline-block;
    float: right;
">
    <input type="submit" value="LogOut" class="login">
   
</div><div style="display: inline-block;
"><img src="img/env.png" width="120">
</div></div>

        </div>
        <div class="navbar-wrapper">
            <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
            <div class="container">

                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="homepage.htm">E&ntilde;power</a>
                        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li>
                                    <a href="homepage.htm">Home</a>
                                </li>
                <li><a href="employ.html">Employment opportunities</a></li>
                                <li class="active">
                                    <a href="contact">Courses</a>
                                </li>
                                
                <li><a href="meetup.html">Meet Ups</a></li>
                <li><a href="dashboard">Dashboard</a></li>
                                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->

                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!-- /.navbar-inner -->
                </div>
                <!-- /.navbar -->

            </div>
            <!-- /.container -->
        </div>
        <!-- Carousel
    ================================================== -->
        <!-- /.carousel -->



        <!-- Marketing messaging and featurettes
    ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container">

        @if(!$ngo)
            <h1 style="margin-bottom:30px; font-size: 60px; font-weight: 100;">My Courses</h1>
            

                <ul class="content">
                    
                    @foreach($userCourses as $userCourse)
                    
                    <li>

                        <div class="card-front">
                            <h2>
                                <b>{{ $userCourse->course_name }}</b>
                            </h2>
                            <p>{{ $userCourse->description }}</p>
                        </div>
                        <div class="card-back">
                            <h2>
                                <a href="coursedetails.html"><b>Continue</b></a>
                            </h2>
                        </div>

                    </li>

                    @endforeach
                    
                </ul>
        @else
            
            <div class = "centered">
            <h3 style="display:inline-block;">Click to add a vocational course: </h3>
            <a href="create.html" style=" height:30px;width:70px;">Create</a></br>
            <h3 style="display:inline-block;">Schedule Meetup: </h3>
            <a href="schedule.html" id="ct" type="submit" value="Schedule">Schedule</a>

            </div>
            
        @endif


        </div>
            
            
        <div class="container">


            <h1 style="margin-bottom:30px; font-size: 60px; font-weight: 100;">Availiable Courses</h1>
            

                <ul class="content">
                    
                    
                    <li>

                        <div class="card-front">
                            <h2>
                                <b>Embroidery</b>
                            </h2>
                            <p>Sewing together beautiful dreams.</p>
                        </div>
                        <div class="card-back">
                            <h2>
                                <a href="course.html"><b>View Details</b></a>
                            </h2>
                        </div>

                    </li>
                    
                    
                    <li>

                        <div class="card-front">
                            <h2>
                                <b>Tailoring</b>
                            </h2>
                            <p>As the tailoring profession has evolved, so too have the methods of tailoring. There are a number of distinctive business models which modern tailors may practice. While some may practice many, there are others who will practice only one or two.</p>
                        </div>
                        <div class="card-back">
                            <h2>
                                <a href="course.html"><b>View Details</b></a>
                            </h2>
                        </div>

                    </li>
                    
                    
                </ul>


        </div>
            

        <div class="container">
            
            
            <!-- FOOTER -->
            <footer style="background: #1b1b1b; padding: 2rem 4rem;">
                <p class="pull-right">
                    <a href="#">Back to top</a>
                </p>
                <p>© 2014 E&ntilde power Company, Inc. ·
                    <a href="policy.html">Privacy</a>·
                    <a href="policy.html">Terms</a>
                </p>
            </footer>
            
        </div>
    </div>
    <!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src={{ URL::asset( "js/bootstrap-transition.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-alert.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-modal.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-dropdown.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-scrollspy.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-tab.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-tooltip.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-popover.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-button.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-collapse.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-carousel.js") }}></script>
    <script src={{ URL::asset( "js/bootstrap-typeahead.js") }}></script>
    <script>
        $(document).ready(function() {
              $('#myCarousel').carousel();
          });
    </script>


</body>

</html>