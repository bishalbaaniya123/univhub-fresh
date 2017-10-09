<!DOCTYPE html>
<html>
<head>
    <title>Univhub | Your Profile</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/circle.css">
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
    
    <link rel="stylesheet" href="percircle.css">
    <style type="text/css">
        .badge-notify{
            background:#DE585D;
            position:relative;
            top: -24px;
            left: -12px;
        }

        .btn-success{
            background-color: #1ABC9C;
            border-color: #95989A;
            border-radius: 50%;
            height: 50px;
            width: 50px;
        }

        .btn-success:hover{
            background-color: #1ABC9C;
            border-color: #95989A;
        }

        .btn-default{
            background-color: #E3E6E8;
            border-color: #95989A;
            border-radius: 50%;
            border:none;
            height: 50px;
            width: 50px;
            font-size: 25px;
        }

        .navbar{
            border:none !important;
            border-left: 3px solid transparent !important;
            border-radius:0px !important;
        }
        .btn-default:hover{
            background-color: #1ABC9C;
            color: #ffffff;
        }

        .btn-completed{
            background-color: #1ABC9C;
            border-color: transparent;
            height: 60px;
            border:none;
            width: 60px;
            line-height: 30px;
            border-radius: 50%;
            color: #fff;
            font-size: 25px;
        }

        .btn-current{
            background-color: #1ABC9C;
            border:none;
            height: 60px;
            width: 60px;
            line-height: 30px;
            border-radius: 50%;
            color: #ffffff;
            border-color: #1ABC9C;
            font-size: 25px;
        }
        button{
            border:none;
        }
        .btn:hover{
            color:#fff;
        }
        .btn-disabled{
            background-color: #B4B6B7;
            border-color: #95989A;
            border-radius: 50%;
            height: 60px;
            border:none;
            line-height: 30px;
            width: 60px;
            font-size: 25px;
            color: #ffffff;
            cursor: not-allowed;
        }

        .btn-navbar-bar{
            color: #B4B6B7 !important;
            background-color: transparent !important;
            font-size: 18px !important;
        }

        .navbar{
            color: black;
            background-color: transparent;
            font-size: 18px;
            padding: 0px;
            padding-bottom: 0px;
            margin-bottom: 0px;
            margin-right: 0px;
        }
        .steps td{
            width: 300px;
            font-family: Segoe UI;
            text-align: center;
            font-size: 12px;
        }

        .nav-bar td{
            vertical-align: top;
            height: 5px;
        }

        .navbar{
            width: 100%;
            padding: 10px;
        }
        .navbar i{
            color:#95989A !important;
            line-height: 30px;
        }
        .max-nav .navbar:hover{
            border-left: 3px solid #1abc9c !important;
            background: #f2f6f9 !important;
        }
        .max-nav .navbar:hover font{
            color: #95989A !important;
        }
        .max-nav-bar a{
            text-decoration: none;
        }

        .max-nav-bar li{
            font-family: Segoe UI;
            font-size:  16px;
            padding: 14px;
            border-radius: 0px;
            height: 30px;
        }
        .max-nav-bar li i{
            font-size: 18px;
            line-height: 23px;
        }
        .max-nav-bar img{
            height: 18px;
            width: 18px;
        }

        .next a{
            font-family: Segoe UI;
            font-size: 25px;
            float: right;
            color: #1ABC9C;
            text-decoration: none;
        }

        .next img{
            padding-left: 5px;
        }

        .menu-description{
            margin-left: 10px;
            padding: 10px;
        }

        .menu-description:hover{
            color: white;
        }

        a:hover{
            text-decoration: none;
            color: #1ABC9C;
        }

        .destination img:hover{
            border: 3px solid #1ABC9C;
            border-radius: 50%;
        }

        .progress-bar{
            background-color:#DE585D;
        }
        font{
            color: #95989A;
        }
        li.active{
            border-left: 3px solid #1abc9c !important;
            background: #f2f6f9 !important;
        }
        .max-nav-bar ul a li:hover i{
            color: #1abc9c !important;
        }
        .max-nav-bar ul a li:hover font{
            color: #1abc9c !important;
        }
        .go-back:hover{
            color:#1abc9c;
        }
        #loadHere{
            padding-top: 40px;
        }
        .btn{
            border:none;
        }
        .btn:hover,
        .btn:focus{
            box-shadow:none;
            outline: none;
        }
        button:focus {outline:0;}
        .table-responsive{
            border:none;
        }
        .notifications{
            position:relative;
            top: 35px;
            float:right;
            z-index:99;
            right:40px;
        }
        .notifications a{
            display:inline-block;
            margin: 0 10px;
        }
        li{
            list-style:none;
        }
        .progress-bar{
            background-color:#1abc9c;
        }
        .progress{
            box-shadow:none;
        }
        .progress-steps font{
            margin-top:10px;
            display:inline-block;
        }
        .user-dashboard-area{
            padding: 50px 20px;
        }
        .nav-bar, .max-nav-bar{
            padding:10px;
        }
        .max-nav-bar .btn-navbar-bar{
            margin-top: -10px;
        }
        .mini-nav .navbar:hover i{
            color:#1abc9c;
        }
        .mini-nav,
        .max-nav{
            transition: .6s;
        }
        .hide-anim{
            position:relative;
            left: -100%;
        }
        button:focus {outline:0 !important;}
        .menu-place{
            padding: 15px;
        }
        .max-nav .menu-place{
            padding: 14px;
        }
        .mini-nav .navbar{
            padding-left: 9px;
        }
        a:focus{
            text-decoration: none;
        }
        .menu-place span{
            font-size:19px;
        }
        .mini-nav li:not(.btn-navbar-bar):hover{
            border-left: 3px solid #1abc9c !important;
            background: #f2f6f9 !important;
        }
        .majorFaculty{
            border-left: 3px solid transparent;
        }
        .list-group-item:first-child{
            border-radius: 0px !important;
        }
        @media only screen and (max-width:991px){
            .max-nav{
                display:none;
            }
            .mini-nav{
                display:block;
            }
            .hide-anim{
                left:0 !important;
            }
            .mini-nav .menu-place{
                display:none;
            }
            .user-dashboard-area{
                margin-left:70px !important;
            }
        }
    </style>

    <script>
        $(document).ready( function() {
            $("#loadUpload,#loadUploadMax").on("click", function () {
                $(".navbar").removeClass("active");
                $(this).find(".navbar").addClass('active');
                 $("#loadHere").html("<center><image src='images/Loading_icon.gif'></center>");
                $("#loadHere").load("getDocuments", function (response, status, xhr) {
                    if (status == "error") {
                        var msg = "Sorry but there was an error: ";
                        $("#loadHere").html(msg + xhr.status + " " + xhr.statusText);
                    }
                });
            });
        });

        $(document).ready( function() {
            $("#loadClass,#loadClassMax").on("click", function() {
                $("#loadHere").load("getObjects");
                $(".navbar").removeClass("active");
                $(this).find(".navbar").addClass('active');
            });
        });

        $(document).ready( function() {
            $("#loadRewards").add('#loadRewardsMax').on("click", function(e) {
                e.preventDefault();
                $("#loadHere").load("getOffers");
                $(".navbar").removeClass("active");
                $(this).find(".navbar").addClass('active');
            });
        });

        $(document).ready( function() {
            $("#loadUniversity,#loadMyUniversity").on("click", function() {
                $("#loadHere").load("getUniversity");
                $(".navbar").removeClass("active");
                $(this).find(".navbar").addClass('active');
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready( function() {
            $("#loadGuide").on("click", function() {
                $("#loadHere").load("usaGuide");
            });
        });

        function goTo3(){
            $("#loadHere").load("getLists");
            document.getElementById("progressBar").style.width="50%";
        }
    </script>

    <script type="text/javascript">
        function getMiniNav(){
            document.getElementById("miniNav").className = "mini-nav";
            document.getElementById("maxNav").className = "max-nav hide-anim";
            $(".user-dashboard-area").css({marginLeft:'70px'});
        }

        function getMaxNav(){
            document.getElementById("miniNav").className = "mini-nav hide-anim";
            document.getElementById("maxNav").className = "max-nav";
            $(".user-dashboard-area").css({
                marginLeft:'235px'
            });
        }
    </script>
</head>
<body style="background-color: #fff;">
<div class="container" style="width:100%; background-color: #E3E6E8; padding-top: 0px;">
    <div class="row">
        <div class="notifications">
            <a href="#"><i class="fa fa-bell" aria-hidden="true" style="color: white; float: right; font-size: 30px;"><span class="badge badge-notify">5</span></i></a>
            <a href="#"><i class="fa fa-gear" aria-hidden="true" style="color: white; float: right; font-size: 30px;"></i></a>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="table table-responsive" style="margin-bottom: 0px;">
                <table>
                    <tr>
                        <td style="padding: 30px;">
                            <div class="clearfix">
                                {{--<div class="c100 p40 dark" style="height: 170px; width: 170px;">--}}
                                        {{--<span>--}}

                                            {{--<img src="images/users/default-user.png" style="height: 150px; width: 150px; border-radius: 50%; top:-10px; left:-20px; padding-left: 10px; padding-top: 10px; ">--}}
                                        {{--</span>--}}
                                    {{--<div class="slice" style="font-size: 170px;">--}}
                                        {{--<div class="bar"></div>--}}
                                        {{--<div class="fill"></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<center><h4 id="text-percent" style="font-family: Segoe UI; color: #95989A;">0 %</h4></center>--}}
                                <div id="custom" class="yellow small"></div>
                                <img src="images/users/default-user.png" style="z-index:3; height: 150px; width: 150px; position: absolute; margin-left: 10px; margin-top: 10px;">
                                <img src="images/users/default-user.png" style="z-index:3; height: 150px; width: 150px; border-radius: 50%; top:-10px; left:-20px; padding-left: 10px; padding-top: 10px; ">

                            </div>
                            {{--<p id="text-percent" style="position: relative;">0 %</p>--}}
                            <br>
                            <center><h4 id="text-percent" style="font-family: Segoe UI; color: #95989A;">0 %</h4></center>

                            {{--<button id="myButton" onclick="myFunction({{$number_0}})" style="position: relative;">0%</button>--}}
                            {{--<button id="myButton" onclick="myFunction({{$number_5}})" style="position: relative;">5%</button>--}}
                            {{--<button id="myButton" onclick="myFunction({{$number_10}})"style="position: relative;">10%</button>--}}
                            {{--<button id="myButton" onclick="myFunction({{$number_20}})" style="position: relative;">20%</button>--}}
                            {{--<button id="myButton" onclick="myFunction({{$number_25}})"style="position: relative;">25%</button>--}}

                        </td>

                        <td>
                            <h3 style="font-family: Segoe UI;">Mithai Lal  Zadav</h3>
                            <img src="images/flags/usa-large.png" style="width: 50px; height: 40px;">
                            <font style="font-family: Segoe UI; color: #95989A;font-size:15px;;">United States Of America</font>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
</div>
<!-- end profile contianer -->

<!-- steps contianer -->
<div class="container user-dashboard" style="width: 100% ;">
    <div class="row">

        <!-- mininav start-->
        <div class="mini-nav hide-anim" id="miniNav" style="width: 70px;float: left;position: relative; margin-right: -100%;">
            <div>
                <div class="nav-bar">
                    <ul type="none" style="padding: 0px;">
                        <center>
                            <div class="menu-place">
                                <a href="{{url('yourProfile')}}" onclick="getMaxNav()">
                                    <li class="btn-navbar-bar"><i class="icon-menu" aria-hidden="true"></i></li>
                                </a>
                            </div>
                            {{--<a href="javascript:;" id = "loadDelivery">--}}
                                <a href="{{url('yourProfile')}}">
                                <li class="navbar active"><i class="icon-home" aria-hidden="true"></i></li>
                            </a>

                            <a href="javascript:;" id = "loadUpload" class="loadUpload">
                                <li class="navbar"><i class="icon-cloud-upload" aria-hidden="true"></i></li>
                            </a>
                            <a href="javascript:;" id = "loadDelivery">
                                <li class="navbar"><i class="icon-rocket" aria-hidden="true"></i></li>
                            </a>

                            <a href="javascript:;" id = "loadCounsel">
                                <li class="navbar"><i class="icon-user" aria-hidden="true"></i></li>
                            </a>


                            <a href="javascript:;" id = "loadClass">
                                <li class="navbar"><i class="icon-book-open" aria-hidden="true"></i></li>
                            </a>
                            <a href="javascript:;" id = "loadUniversity">
                                <li class="navbar"><i class="fa fa-university" aria-hidden="true"></i></li>
                            </a>

                            <a href="javascript:;" id = "loadRewards">
                                <li class="navbar"><i class="icon-present" aria-hidden="true"></i></li>
                            </a>

                        </center>
                    </ul>
                </div>
            </div>
        </div>
        <!-- mininav end-->

        <!-- maxnav start-->
        <div class="max-nav" style="width: 235px;float: left;position: relative; margin-right: -100%;" id="maxNav">
            <div>
                <div class="max-nav-bar">
                    <div class="menu-place">
                        <span>Apply</span>
                        <a href="javascript:;" style="float: right;" onclick="getMiniNav()">
                            <li class="btn-navbar-bar"><i class="icon-menu" aria-hidden="true"></i></li>
                        </a>
                    </div>
                    <ul type="none" style="padding: 0px;">
                        <a href="{{url('yourProfile')}}">
                            <li class="navbar active"><i class="icon-home" aria-hidden="true"></i>
                                <font class="menu-description">Home</font>
                            </li>
                        </a>

                        <a href="javascript:;" id = "loadUploadMax" class="loadUpload">
                            <li class="navbar"><i class="icon-cloud-upload" aria-hidden="true"></i>
                                <font class="menu-description">Upload</font>
                            </li>
                        </a>
                        <a href="javascript:;" id = "loadDeliveryMax">
                            <li class="navbar"><i class="icon-rocket" aria-hidden="true"></i>
                                <font class="menu-description">Delivery</font>
                            </li>
                        </a>

                        <a href="javascript:;" id = "loadCounselMax">
                            <li class="navbar">
                                <i class="icon-user" aria-hidden="true"></i>
                                <font class="menu-description">Counselling</font>
                            </li>
                        </a>

                        <a href="javascript:;" id = "loadClassMax">
                            <li class="navbar">
                                <!--i class="fa fa-graduation-cap" aria-hidden="true"></i-->
                                <i class="icon-book-open" aria-hidden="true"></i>
                                <font class="menu-description">Classes</font>
                            </li>
                        </a>

                        <a href="javascript:;" id = "loadMyUniversity">
                            <li class="navbar">
                                <!--i class="fa fa-graduation-cap" aria-hidden="true"></i-->
                                <i class="fa fa-university" aria-hidden="true"></i>
                                <font class="menu-description">My University</font>
                            </li>
                        </a>

                        <a href="javascript:;" id = "loadRewardsMax">
                            <li class="navbar"><i class="icon-present" aria-hidden="true"></i>
                                <font class="menu-description">Offers</font>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <!-- maxnav end-->

        <!-- Right Side Start -->
        <div  class="user-dashboard-area" style="float:left;margin-left:235px;">
            <!-- Steps Start -->
            <div class="steps">
                <div class="progress" style="margin-left: 10%; margin-bottom: -36px; margin-top: 20px; height: 10px; width: 80%;">
                    <div class="progress-bar progress-bar-striped" id="progressBar" role="progressbar" aria-valuemin="0" aria-valuemax="70" style="width:1%;">
                        <span class="sr-only"></span>
                    </div>
                </div>
                <form class="progress-steps">
                    <table>
                        <tr>
                            <td>
                                <button class="btn btn-current" id="firstStep" type="button" >
                                    <!-- i class="fa fa-check" aria-hidden="true" style="font-size: 35px;"></i-->
                                    1
                                </button>
                                <br>
                                <font>Choosing Destination</font>
                            </td>

                            <td>
                                <button class="btn btn-disabled" id="secondStep" type="button">
                                    2
                                </button>
                                <br>
                                <font>Choosing Major</font>
                            </td>

                            <td>
                                <button class="btn btn-disabled" type="button" id="thirdStep">
                                    3
                                </button>
                                <br>
                                <font>Applying For University</font>
                            </td>

                            <td>
                                <button class="btn btn-disabled" type="button" id="fourthStep">
                                    4
                                </button>
                                <br>
                                <font>Financing Your Study</font>
                            </td>

                            <td>
                                <button class="btn btn-disabled" type="button" id="fifthStep">
                                    5
                                </button>
                                <br>
                                <font>Getting Your Visa</font>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <!-- Steps End -->

            <!-- Dyanamic Part Start -->
            <div id="loadHere">
                <h4 style="font-family: Segoe UI; font-we
                ight: bold;">
                    <center>
                        Choose A Country
                    </center>
                </h4>
                <div class="destination">
                    <div class="col-md-3 col-md-offset-2">
                        <div class="panel panel-default" style="border-width: 0px;">
                            <div class="panel-body">
                                <center>
                                    <a href="javascript:;" id="loadGuide" name="United States of America" onclick="alertThis(this); myFunction(5); countrySaveToCookieUSA();">
                                        <img src="images/flags/USA-Flag-Sphere.png" style="height: 100px; width: 100px;">
                                        <h5 style="font-family: Segoe UI; font-weight: bold;" id="usa-country" country="United States of America">United States Of America</h5>
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-md-offset-2">
                        <div class="panel panel-default" style="border-width: 0px;">
                            <div class="panel-body">
                                <center>
                                    <a href="javascript:;" id="loadAusGuide" name="Australia" onclick="alertThis(this)">
                                        <img src="images/flags/australia-100.png" height="100px;" onclick="myFunction(5); countrySaveToCookieAus();">
                                        <h5 style="font-family: Segoe UI; font-weight: bold;" id="aus-country" country="Australia">Australia</h5>
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dyanamic Part End -->
        </div>
        <!-- Right Side End -->
    </div>
</div>
    <script type="text/javascript">
        $(function(){
            $("[id$='circle']").percircle();

            $("#clock").percircle({
                perclock: true
            });

            $("#countdown").percircle({
                perdown: true,
                secs: 14,
                timeUpText: 'finally!',
                reset: true
            });

            $("#custom").percircle({
                percent: 50
            });

            $("#custom-color").percircle({
                progressBarColor: "#CC3366",
                percent: 64.5
            });
        });

        $(document).ready(function(){
            $("#custom").percircle({
                progressBarColor: "#1abc9c",
                percent: 0.000001
            });
        });

        function myFunction(a) {
            $("#custom").percircle({
                progressBarColor: "#1abc9c",
                text:a,
                percent: a
            });

            document.getElementById("text-percent").innerHTML = Math.floor(a)+' %';
            document.getElementById("progressBar").style.width=a + "%";
        }

        $(document).ready( function() {
            $(".loadGuide").on("click", function(e) {
                e.preventDefault();
                $("#loadHere").load("usaGuide");
                $(".navbar").removeClass("active");
                $(this).find(".navbar").addClass('active');
            });

            $("#loadAusGuide").on("click", function(e) {
                e.preventDefault();
                $("#loadHere").load("ausGuide");
                $(".navbar").removeClass("active");
                $(this).find(".navbar").addClass('active');
            });
        });

        $(document).ready( function() {
            $("#loadDelivery,#loadDeliveryMax").on("click", function () {
                $("#loadHere").load("delivery");
                $(".navbar").removeClass("active");
                $(this).find(".navbar").addClass('active');
            })
        });

        $(document).ready( function() {
            function countrySaveToCookieUSA() {
                var country = document.getElementById("usa-country").innerHTML;
                var a = document.cookie = "country=" + country + ";" + "expires=Fri, 25 Dec 2020 23:59:59 GMT;";
            }
        
            function countrySaveToCookieAus() {
                var country2 = document.getElementById("aus-country").innerHTML;
                var a = document.cookie = "country=" + country2 + ";" + "expires=Fri, 25 Dec 2020 23:59:59 GMT;";
            }
        });
    </script>
    <script src="jquery-3.2.1.js"></script>
    <script src="js/percentage.js"></script>
    <script type="text/javascript" src="percircle.js"></script>
</body>


</html>
