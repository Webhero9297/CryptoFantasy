<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/metronic/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('./assets/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/home.css') }}" rel="stylesheet">
    <script src="{{ asset('theme/bower_components/jquery/jquery.min.js') }}"></script>

    <link rel="shortcut icon" href="{{ asset('./images/icon/logo.png') }}">
    <style>
        body{
            font-family: monospace, sans-serif;
        }

    </style>
    <script src="{{ asset('./js/Blockchain.js') }}" ></script>
</head>
<style>
    @media(max-width: 767px){
        .navbar-nav {
            margin: 0px -15px;
        }
        .navbar-nav a {
            background-color: black;
        }
        .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
            background: rgb(25,25,25)!important;
        }
        .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
            color: #333;
            background-color: rgb(25,25,25)!important;
        }
        .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
            background-color: transparent;
        }
        .dropdown-menu {
            padding: 0px;
            border: 1px solid #ffffff77;
        }
    }
    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f133;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .black-background {
        background: #000!important;
    }

    /*************************************   Megamenu Start   ******************************************/

    /*************************************   Megamenu End     ******************************************/
</style>
<script>var blockchainServer='{{ config('app.blockchainserver') }}'</script>
<script>
    Athlete.init();
</script>
<body>
<div id="alertModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="alertmodal_title">Modal Header</h4>
            </div>
            <div class="modal-body" id="alertmodal_body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="alertmodal_footer_cancel" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<div id="app" class="app-body">
    <nav class="navbar navbar-default navbar-laravel">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('./images/icon/logo.png') }}" class="logo-icon" />
                    <span class="logo-title">CRYPTO FANTASY</span>
                    {{--{{ config('app.name', 'Laravel') }}--}}
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="dropdown_marketplace_menu">

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li><a href="{{ route('login') }}">SignIn</a></li>
                    <li><a href="{{ route('register') }}">SignUp</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>
                        <!-- Authentication Links -->
                        <ul class="dropdown-menu">
                            @if ( \Auth::user()->user_role == 1 )
                                <li>
                                    <a href="{{ route('adminpanel') }}" >Adminpanel</a>
                                </li>
                            @endif
                            <li>
                                <a href="{{ route('dashboard') }}" >Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('account') }}" >My Account</a>
                            </li>
                            <li>
                                <a href="{{ route('transaction') }}" >My Transactions</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="crypto-container">
        <div class="col-xs-12 col-md-12 crypto-celebrity-container">
            <div class="py-4 container-fluid marketplace-container">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    var isMobile = false; //initiate as false
    $(document).ready(function(){
        doOnResizeAppBody();
        $(window).resize(function(){
            doOnResizeAppBody();
        });

        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            var _wH = $(window).height();
            if (scroll > _wH) {
                $('.navbar-laravel').addClass('black-background');
            } else {
                $('.navbar-laravel').removeClass('black-background');
            }
        });

        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
                || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
            isMobile = true;
        }

        $.get('/api/v1/public/marketplacemenu', function(menu_data){
            menuHTML = '';
            var wH = $(window)[0].innerHeight-100;
            if ( menu_data.length>5 ) {
                for(i=0;i<5;i++) {
                    var type = menu_data[i];
                    menuHTML += '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' + type.type_name + ' <span class="caret"></span></a>';
                    team_data = type.team_data;
                    if (team_data.length >= 1) {
                        if ( isMobile && team_data.length>=10 )
                            menuHTML += '<ul class="dropdown-menu"  style="overflow-y:scroll;height:'+wH+'px">';
                        else
                            menuHTML += '<ul class="dropdown-menu" >';
                        for (j in team_data) {
                            team = team_data[j];
                            menuHTML += '<li><a href="/marketplace/'+team._id+'" id="' + team._id + '" >' + team.team_name + '</a></li>';
                        }
                        menuHTML += '</ul>';
                    }
                    menuHTML += '</li>';
                }
                menuHTML += '<li class="dropdown">\
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>\
                            <ul class="dropdown-menu">';
                for(i=5;i<menu_data.length;i++) {
                    var type = menu_data[i];
                    menuHTML += '<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">' + type.type_name + '</a>';
                    team_data = type.team_data;
                    if (team_data.length >= 1) {
                        if ( isMobile && team_data.length>=10 )
                            menuHTML += '<ul class="dropdown-menu"  style="overflow-y:scroll;height:'+wH+'px">';
                        else
                            menuHTML += '<ul class="dropdown-menu" >';
                        for (j in team_data) {
                            team = team_data[j];
                            menuHTML += '<li><a href="/marketplace/'+team._id+'" id="' + team._id + '" >' + team.team_name + '</a></li>';
                        }
                        menuHTML += '</ul>';
                    }
                    menuHTML += '</li>';
                }
                menuHTML += '</ul></li>';
            }
            else {
                for( i in menu_data ) {
                    var type = menu_data[i];
                    menuHTML += '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' + type.type_name + ' <span class="caret"></span></a>';
                    team_data = type.team_data;
                    if (team_data.length >= 1) {
                        if ( isMobile && team_data.length>=10 )
                            menuHTML += '<ul class="dropdown-menu"  style="overflow-y:scroll;height:'+wH+'px">';
                        else
                            menuHTML += '<ul class="dropdown-menu" >';
                        for (j in team_data) {
                            team = team_data[j];
                            menuHTML += '<li><a href="/marketplace/'+team._id+'" id="' + team._id + '" >' + team.team_name + '</a></li>';
                        }
                        menuHTML += '</ul>';
                    }

                    menuHTML += '</li>';
                }
            }

            $('#dropdown_marketplace_menu').html(menuHTML);


            (function($){
                $(document).ready(function(){
                    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                        event.preventDefault();
                        event.stopPropagation();
                        $(this).parent().siblings().removeClass('open');
                        $(this).parent().toggleClass('open');
                    });
                });
            })(jQuery);

        });

        $('body').css('height', ($(window)[0].innerHeight)+'px');


    });

    doOnResizeAppBody = function() {
//        $('.app-body').css('width', $(window)[0].innerWidth);
//        $('.app-body').css('height', $(window)[0].innerHeight);
    }
</script>
</body>
</html>
