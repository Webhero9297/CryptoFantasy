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
    <link href="{{ asset('css/frontend/marketplace.css') }}" rel="stylesheet">
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

    .div-ani-scroll {
        width: 100%;
        height: 10px;
        background: #0297bf;
        opacity: 0.5;
        position: absolute;
        top: 0;
        left:0;
    }
    .athlete-card {
        margin-bottom: 0;
    }

    .img-comp-container {
        position: relative;
        height: 425px; /*should be the same height as the images*/
    }
    .img-comp-img {
        position: absolute;
        width: auto;
        height: auto;
        overflow:hidden;
    }
    .img-comp-img img {
        /*display:block;*/
        vertical-align:middle;
    }
    .img-comp-slider {
        position: absolute;
        z-index: 9;
        cursor: ew-resize;
        width: 10px;
        height: 5px;
        background: linear-gradient(to top, #0046ff00, #7cc4f7, #004c8000);
        opacity: 0.7;
        margin-left: -15px;
        border-radius: 3px;
        /*position: absolute;*/
        /*z-index:9;*/
        /*cursor: ew-resize;*/
        /*!*set the appearance of the slider:*!*/
        /*width: 40px;*/
        /*height: 40px;*/
        /*background-color: #2196F3;*/
        /*opacity: 0.7;*/
        /*border-radius: 50%;*/
    }

    .grey-image {
        -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
        filter: saturate(0%); /*grayscale(100%);*/
        border: 1px solid gold;
    }
    /**************************   Loading Start   **************************/

    .progress {
        overflow: hidden;
        height: 32px;
        background-color: #f5f5f5;
        margin-bottom: 0;
    }
    .progress-bar {
        padding: 3px;
        font-family: Montserrat-Regular;
        font-size: 20px;
    }
    /**************************    Loading End    **************************/
    /**************************    Checkbox Start    *****************************/
    @import url('https://fonts.googleapis.com/css?family=Nunito');
    /* Custom Radio Bttns Component
    -----------------------------*/
    .config-options {
        border: 1px dotted #121212;
        margin-bottom: 20px;
    }
    .config-options ul,
    .config-options ul li {
        list-style: none;
        margin: 0;
        padding: 0;
        font-size: 0px;
    }
    .config-options ul {
        /*max-width: 325px;*/
        margin: 14px auto 0 auto;
    }
    .config-options ul li,
    .config-options ul li * {
        /* disable 'select' fucntionality for
        these elements - otherwise clunky on mobile */
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;

        /* remove the tap highlight color
        on mobile browsers, since the :active
        state have a style that provides the feedback*/
        -webkit-tap-highlight-color: transparent;
    }
    .config-options ul li {
        display: block;
        vertical-align: top;
        /*margin-bottom: 12px;*/
        width: 65px;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 0.075em;
    }
    .config-options input {
        display: none;
        width: 0;
        height: 0;
    }
    .config-options label {
        display: inline-block;
        width: 100%;
        text-align: center;
        position: relative;
        cursor: pointer;
    }
    .config-options label:before {
        content: '';
        display: block;
        width: 44px;
        height: 44px;
        margin: 0 auto 8px auto;
        border-radius: 100%;
        /* inset shadow for lighting affect */
        -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.24);
        -moz-box-shadow: inset 0 0 3px rgba(0,0,0,0.24);
        box-shadow: inset 0 0 3px rgba(0,0,0,0.24);
        background: #e5e5e5;
    }
    /* Thumbnail Colors as BGs
    -----------------------------*/
    /* Gold */
    .opt-gold label:before {
        background: #e5e5e50f;
        border: 1px solid darkgrey;
        background-color: linear-gradient(-180deg, #EDDECC 0%, #BE925D 100%);
        background-image: url('{{ asset('./images/background/metamask-wallet.png') }}');
        background-size: 100% 100%;
    }
    /* Silver */
    .opt-silver label:before {
        /*background: linear-gradient(-180deg, #F7F7F7 0%, #B7B2AD 100%);*/
        background: #e5e5e50f;
        border: 1px solid darkgrey;
        background-color: linear-gradient(-180deg, #3E668A 0%, #132538 100%);
        background-image: url('{{ asset('./images/background/account-wallet.png') }}');
        background-size: 100% 100%;
    }
    /* Graphite */
    .opt-graphite label:before {
        background: linear-gradient(-180deg, #807F7D 0%, #373634 100%);
    }
    /* Blue Steel */
    .opt-blue-steel label:before {
        background: linear-gradient(-180deg, #3E668A 0%, #132538 100%);
    }
    /* Rose Gold */
    .opt-rose-gold label:before {
        background: linear-gradient(-180deg, #E8B5A5 0%, #CC7E6C 100%);
    }
    /* Crimson */
    .opt-crimson label:before {
        background: linear-gradient(-180deg, #BC3D3D 0%, #782222 100%);
    }
    /* Electric Blue */
    .opt-electric-blue label:before {
        background: linear-gradient(-180deg, #AEEDF7 0%, #74B3C0 100%);
    }
    /* Mint Green */
    .opt-mint-green label:before {
        background: linear-gradient(-180deg, #B0F9E5 0%, #7BC7AE 100%);
    }
    /* Black */
    .opt-black label:before {
        background: linear-gradient(-180deg, #636363 0%, #090908 100%);
    }
    /* Rust */
    .opt-rust label:before {
        background: linear-gradient(-180deg, #DB8963 0%, #A74E2C 100%);
    }

    .config-options label span {
        display: block;
    }

    /* faux check mark styles */
    .config-options label .faux-checked {
        display: block;
        width: 44px;
        height: 44px;
        border-radius: 100%;
        overflow: visible;
        -webkit-transform: translateX(-50%) translateY(-50%) scale(1.0);
        -moz-transform: translateX(-50%) translateY(-50%) scale(1.0);
        -ms-transform: translateX(-50%) translateY(-50%) scale(1.0);
        -o-transform: translateX(-50%) translateY(-50%) scale(1.0);
        transform: translateX(-50%) translateY(-50%) scale(1.0);
        position: absolute;
        left: 50%;
        top: 22px;
        opacity: 0.0;
        background: transparent;
        background: url(#) no-repeat 0 0 transparent;
        background-size: 100% 100%;
        border-image-slice: 1;
        -webkit-transition:
                width 0.2s ease-out 0.05s,
                height 0.2s ease-out 0.05s,
                opacity 0.2s ease-out 0.05s,
                -webkit-transform 0.2s ease-out 0.05s;
        -moz-transition:
                width 0.2s ease-out 0.05s,
                height 0.2s ease-out 0.05s,
                opacity 0.2s ease-out 0.05s,
                -moz-transform 0.2s ease-out 0.05s;
        -ms-transition:
                width 0.2s ease-out 0.05s,
                height 0.2s ease-out 0.05s,
                opacity 0.2s ease-out 0.05s,
                -ms-transform 0.2s ease-out 0.05s;
        -o-transition:
                width 0.2s ease-out 0.05s,
                height 0.2s ease-out 0.05s,
                opacity 0.2s ease-out 0.05s,
                -o-transform 0.2s ease-out 0.05s;
        transition:
                width 0.2s ease-out 0.05s,
                height 0.2s ease-out 0.05s,
                opacity 0.2s ease-out 0.05s,
                transform 0.2s ease-out 0.05s;
    }

    .config-options label .faux-checked:before {
        /*content: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCA1Ni4xIDU2LjEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDU2LjEgNTYuMTsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoJLnN0MHtmaWxsOnVybCgjU1ZHSURfMV8pO30KPC9zdHlsZT4KPGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8xXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyOC4wNSIgeTE9IjUuMDAwMDAwZS0wMiIgeDI9IjI4LjA1IiB5Mj0iNTYuMDUiPgoJPHN0b3AgIG9mZnNldD0iMCIgc3R5bGU9InN0b3AtY29sb3I6I0ZGNjIyRCIvPgoJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6IzhDMTg2NyIvPgo8L2xpbmVhckdyYWRpZW50Pgo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTYsMjhjMCwxNS41LTEyLjUsMjgtMjgsMjhzLTI4LTEyLjUtMjgtMjhzMTIuNS0yOCwyOC0yOFM1NiwxMi42LDU2LDI4eiBNMjgsMkMxMy43LDIsMiwxMy43LDIsMjgKCXMxMS42LDI2LDI2LDI2czI2LTExLjYsMjYtMjZTNDIuNCwyLDI4LDJ6Ii8+Cjwvc3ZnPgo=);*/
        display: block;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }
    .config-options label .faux-checked:after {
        content: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAxOCAxOCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTggMTg7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbDp1cmwoI092YWxfMV8pO30KCS5zdDF7ZmlsbDojRkZGRkZGO30KPC9zdHlsZT4KPGcgaWQ9IlN5bWJvbHMiPgoJCgkJPGxpbmVhckdyYWRpZW50IGlkPSJPdmFsXzFfIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9Ii0yNzguNzA3NCIgeTE9IjM4NC40MDY1IiB4Mj0iLTI3OS40MDA5IiB5Mj0iMzgzLjcwNzUiIGdyYWRpZW50VHJhbnNmb3JtPSJtYXRyaXgoMTggMCAwIC0xOCA1MDMyIDY5MjIpIj4KCQk8c3RvcCAgb2Zmc2V0PSIwIiBzdHlsZT0ic3RvcC1jb2xvcjojRjQ1QjMyIi8+CgkJPHN0b3AgIG9mZnNldD0iMSIgc3R5bGU9InN0b3AtY29sb3I6I0Q2NEI2NCIvPgoJPC9saW5lYXJHcmFkaWVudD4KCTxjaXJjbGUgaWQ9Ik92YWwiIGNsYXNzPSJzdDAiIGN4PSI5IiBjeT0iOSIgcj0iOSIvPgoJPHBhdGggY2xhc3M9InN0MSIgZD0iTTEzLjYsNi41Yy0wLjQtMC40LTEtMC40LTEuNCwwbC00LjIsNC4yTDUuOCw4LjdjLTAuNC0wLjQtMS0wLjQtMS40LDBzLTAuNCwxLDAsMS40bDIuOCwyLjgKCQljMC40LDAuNCwxLDAuNCwxLjQsMGw0LjktNC45QzE0LDcuNiwxNCw2LjksMTMuNiw2LjV6Ii8+CjwvZz4KPC9zdmc+Cg==);
        display: block;
        width: 8px;
        height: 8px;
        -webkit-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -ms-transform: translateX(-50%) translateY(-50%);
        -o-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        position: absolute;
        left: 7px;
        top: 7px;
        opacity: 0.0;
        -webkit-transition:
                width 0.2s ease-out 0.15s,
                height 0.2s ease-out 0.15s,
                opacity 0.2s ease-out 0.15s;
        -moz-transition:
                width 0.2s ease-out 0.15s,
                height 0.2s ease-out 0.15s,
                opacity 0.2s ease-out 0.15s;
        -ms-transition:
                width 0.2s ease-out 0.15s,
                height 0.2s ease-out 0.15s,
                opacity 0.2s ease-out 0.15s;
        -o-transition:
                width 0.2s ease-out 0.15s,
                height 0.2s ease-out 0.15s,
                opacity 0.2s ease-out 0.15s;
        transition:
                width 0.2s ease-out 0.15s,
                height 0.2s ease-out 0.15s,
                opacity 0.2s ease-out 0.15s;
    }
    .config-options label:active .faux-checked,
    .config-options label:active ~ label .faux-checked {
        -webkit-transform: translateX(-50%) translateY(-50%) scale(1.45);
        -moz-transform: translateX(-50%) translateY(-50%) scale(1.45);
        -ms-transform: translateX(-50%) translateY(-50%) scale(1.45);
        -o-transform: translateX(-50%) translateY(-50%) scale(1.45);
        transform: translateX(-50%) translateY(-50%) scale(1.45);
        opacity: 1.0;
    }
    .config-options label:active .faux-checked:after,
    .config-options label:active ~ label .faux-checked:after {
        width: 8px;
        height: 8px;
        opacity: 0.0;
    }
    .config-options input:checked ~ label .faux-checked {
        -webkit-transform: translateX(-50%) translateY(-50%) scale(1.2728);
        -moz-transform: translateX(-50%) translateY(-50%) scale(1.2728);
        -ms-transform: translateX(-50%) translateY(-50%) scale(1.2728);
        -o-transform: translateX(-50%) translateY(-50%) scale(1.2728);
        transform: translateX(-50%) translateY(-50%) scale(1.2728);
        opacity: 1.0;
    }
    .config-options input:checked ~ label .faux-checked:after {
        width: 14px;
        height: 14px;
        opacity: 1.0;
    }
    .wallet-content {
        position: absolute;
        left: 43px;
        top: 2px;
        border: 1px solid darkgrey;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
        width: 420px;
        border-left: none;
        padding-left: 20px;
        min-height: 40px;
    }
    .wallet-content span {
        font-family: Montserrat-Light;
        text-align: left;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    .warning-alert {
        font-style: italic;
        background: #fd4e5d;
        border-radius: 10px;
        padding: 10px;
    }

    .alert {
        padding: 10px 20px;
        background-color: #f44336;
        color: white;
        font-style: italic;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 5s ease-in-out;
    }
    .invisible {
        opacity: 0;
    }
    .invisible {
        opacity: 1;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
    .loader {
        border: 5px solid #f3f3f300;
        border-radius: 50%!important;
        border-top: 2px solid #3498db;
        width: 33px;
        height: 33px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        position: absolute;
        top: 2.3px;
        right: 3px;
    }
    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 7px 30px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }
    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    /**************************     Checkbox End     *****************************/
    @media (width:320px) {
        .wallet-content {
            width: 220px;
        }
        .wallet-content span {
            width: 160px;
        }
    }
    @media (width:375px) {
        .wallet-content {
            width: 270px;
        }
        .wallet-content span {
            width: 220px;
        }
    }

    #regForm {
        background-color: #ffffff00;
        font-family: Raleway;
        width: 100%;
        min-width: 280px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        min-height: 250px;
        display: none;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }

    /***************************************************  TimeClock   Start  ******************************************************/
    /***************************************************  TimeClock    End   ******************************************************/
</style>
<script>
    var account_wallet_id = '<?php echo $account_wallet_id; ?>';
    var private_key = '<?php echo str_replace('0x', '', $account_private_key); ?>';
    var gasPrice = '<?php echo config('app.gasPrice'); ?>';
    var gasLimit = '<?php echo config('app.gasLimit'); ?>';
    var tokenId = '<?php echo $athlete['token_id']; ?>';
    var athleteId = '<?php echo $athlete_id; ?>';
    Athlete.init();
</script>
<body>
<div id="alertModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="alertmodal_title">Crypto Fantasy</h4>
            </div>
            <div class="modal-body" id="alertmodal_body">
                <p>Please choose one of metamask and account.</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="alertmodal_footer_cancel" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<div id="app" class="app-body">
    <div class="crypto-container">
        <div class="col-xs-12 col-md-12 crypto-celebrity-container">
            <div class="py-4 container-fluid marketplace-container">
                <div class="div-page-wrap">
                    <h3 class="h-title">
                        Are you sure you would like to purchase this contract?
                    </h3>
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <div class="img-comp-container">
                            <div class="img-comp-img">
                                @include('frontend.partial.athlete', ['athlete' => $athlete, 'provider' => $provider, 'contractAddress'=>$contractAddress, 'canBought'=>false, 'athlete_type'=>true])
                            </div>
                            <div class="img-comp-img img-comp-overlay">
                                @include('frontend.partial.athlete', ['athlete' => $athlete, 'provider' => $provider, 'contractAddress'=>$contractAddress, 'canBought'=>false, 'grey'=>true, 'athlete_type'=>true])
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-8" style="color:white;">

                        <form id="regForm" action="/action_page.php">
                            <div class="tab">
                                <h3>Please choose to purchase using MetaMask Wallet or this Account Wallet.
                                    Please make sure you transfer ETH to your Account Wallet first if you choose to use your Account Wallet.</h3>
                                <div class="alert invisible" id="div_alert">
                                    {{--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>--}}
                                    <strong>Warning!</strong> MetMask not Installed or not logged-in. Please make sure MetaMask is installed and logged-in and refresh this browser again.
                                </div>
                                <div class="config-options">
                                    <ul>
                                        <li class="opt-gold">
                                            <input type="radio" name="group-name" id="input_metamask" value="metamask" />
                                            <label for="input_metamask">
                                                <div class="faux-checked" buy-method="metamask" id="div_metamask"></div>
                                                <div class="wallet-content" buy-method="metamask">
                                                    <span id="metamask_address"></span>
                                                    <span id="metamask_balance"></span>
                                                    <div class="loader" id="loader_metamask"></div>
                                                </div>
                                            </label>
                                        </li>
                                        <li class="opt-silver">
                                            <input type="radio" name="group-name" id="input_account" value="account"/>
                                            <label for="input_account" >
                                                <div class="faux-checked" buy-method="account" id="div_account"></div>
                                                <div class="wallet-content" buy-method="account">
                                                    <span id="account_address">{{ $account_wallet_id }}</span>
                                                    <span id="account_balance"></span>
                                                    <div class="loader" id="loader_account"></div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                                Purchase is now pending and will be completed shortly.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a id="a_txhash" href="https://{{ ($provider == 'test') ? 'ropsten.' : '' }}etherscan.io/tx/" target="_blank" ></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="div-error" id="div_error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="overflow:auto;">
                                <div style="float:right;">
                                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="button" id="nextBtn" onclick="nextPrev(1)" disabled>Next</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    var direction = 'increase';
    var isClicked = false;
    var timeid;

    var athlete_price;
    var _balance;
    var isMobile = false; //initiate as false
    var _buyMethod = undefined;
    $(document).ready(function(){
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
                || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
            isMobile = true;
        }
        $('body').css('height', ($(window)[0].innerHeight)+'px');
        $('.img-comp-overlay').css('opacity', 0);
        var $radios = $('input[name="group-name"]');
        $radios.change(function(){
            var $checked = $radios.filter(function() {
                return $(this).prop('checked');
            });
            _buyMethod = $checked.val();
            var _b = getWalletBalance(_buyMethod);
            if ( _buyMethod == 'metamask' && _b == 0 ) {
                $checked.prop('checked', false);
                $('#div_alert').removeClass('invisible');
                window.setTimeout(function(){
                    $('#div_alert').addClass('visible');
                }, 20000);
                _buyMethod = 'account';
                $('#input_account').prop('checked', true);
            }
            _balance = getWalletBalance(_buyMethod);
            athlete_price = parseFloat($('#lbl_sell_price').html());
        });

        window.setTimeout(function(){
            Athlete.getMetamaskWalletAddress(function(address){
                $('#metamask_address').html(address);
                if ( address.substring(0, 2) != '0x' ){
                    $('#div_alert').removeClass('invisible');
                }
                fromAddress = address;
                Athlete.getBalance(address, function(balance){
                    balance = parseFloat(balance);
                    $('#loader_metamask').addClass('invisible');
                    $('#metamask_balance').html(balance+'ETH');
                    var athlete_price = parseFloat($('#lbl_sell_price').html());
                    if ( athlete_price > balance ) {
                        canBeBoughtWithMetaMask = false;
                        $('#label_metamask').addClass('wrap-disabled');
                        $('#chk_metamask').attr('disabled', true);
                        $('#chk_metamask').attr('checked', false);
                        $('#chk_account').attr('checked', true);

                    }
                    else {
                        canBeBoughtWithMetaMask = true;
                        $('#btn_athlete_buy').attr('disabled', false);
                    }
                });
            });
            Athlete.getBalance($('#account_address').html(), function(_balance){
                $('#account_balance').html(_balance+'ETH');
                balance = parseFloat(_balance);
                var athlete_price = parseFloat($('#lbl_sell_price').html());
                $('#loader_account').addClass('invisible');
                if ( athlete_price > balance ) {
                    canBeBoughtWithAccount = false;
                    $('#price').addClass('danger-color');
                    $('#label_account').addClass('wrap-disabled');
                    $('#chk_metamask').attr('checked', true);
                    $('#chk_account').attr('checked', false);

                }
                else {
                    canBeBoughtWithAccount = true;
                    $('#nextBtn').prop('disabled', false);
                    $('#btn_athlete_buy').attr('disabled', false);
                }
            });
        }, 3500);
        showTab(currentTab); // Display the crurrent tab
    });

    function initComparisons() {
        $('.img-comp-overlay').css('opacity', 1);
        var x, i;
        x = document.getElementsByClassName("img-comp-overlay");
        for (i = 0; i < x.length; i++) {
            compareImages(x[i]);
        }
        function compareImages(img) {
            var slider, img, clicked = 0, w, h;
            w = img.offsetWidth;
            h = img.offsetHeight;
            img.style.height = "0px";
//            img.style.width = (w / 2) + "px";
            slider = document.createElement("DIV");
            slider.setAttribute("class", "img-comp-slider");
            img.parentElement.insertBefore(slider, img);
            slider.style.width = (w*1+30) + 'px' ; //(h / 2) - (slider.offsetHeight / 2) + "px";
            slider.style.top = '0px' ; //(h / 2) - (slider.offsetHeight / 2) + "px";
            //slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
            timeid = setInterval(frame, 25);
            var pos = 0;
            function frame() {
                if (pos == h-2) {
                    direction = 'decrease';
                }
                if ( pos == 0 ){
                    direction = 'increase';
                }
                move(direction)
                function move(direct){
                    (direct == 'increase')?pos++:pos--;
                    slide(pos);
                }
            }
            function slide(x) {
                img.style.height = x + "px";
//                img.style.width = x + "px";
                slider.style.top = img.offsetHeight - (slider.offsetHeight / 2) + "px";
//                slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
            }
        }
    }
    function getWalletBalance(buy_method) {
        if ( buy_method == 'metamask' ) return parseFloat($('#metamask_balance').html());
        return parseFloat($('#account_balance').html());
    }
    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("prevBtn").style.display = "none";
            document.getElementById("nextBtn").style.display = "none";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        if ( currentTab == 0 && _buyMethod == undefined ) {
            $('#alertModal').modal('show');
            return;
        }
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        if (currentTab >= x.length) {
            document.getElementById("regForm").submit();
            return false;
        }
        if ( currentTab == 1 ) {
//            if ( _buyMethod == 'account' ) {
//                address = $('#account_address').html();
//                var options = { address: address, privatekey: private_key, gasPrice: gasPrice+"0000000000", gas: gasLimit };
//                Athlete.purchaseExWithoutMetamask( tokenId, athlete_price, options, function(receipt){
//                    procBlockchainResult(receipt);
//                });
//            }
//            if ( _buyMethod == 'metamask' ) {
//                Athlete.purchaseEx(tokenId, {from: fromAddress, value:athlete_price }, function(receipt){
//                    procBlockchainResult(receipt);
//                });
//            }
        }
        showTab(currentTab);
    }
    function procBlockchainResult(receipt) {
        initComparisons();
        if ( receipt.result == 'hash' ) {
            $('#a_txhash').attr('href', $('#a_txhash').attr('href')+receipt.hash);
            $('#a_txhash').html(receipt.hash);
        }
        else if ( receipt.result == 'receipt' ) {
            if ( receipt.receipt.status == '0x1' ) {
                $.get('/buycontract/'+athleteId, { price: athlete_price }, function(resp){
                    if (resp == 'ok') {
                        window.location.href = '/dashboard';
                    }
                });
            }
            else{
                $('#div_error').html("Error occurs while purchsing.<br>"+JSON.stringify(receipt.receipt));
            }
        }
        else {
            $('#div_error').html("Error occurs while purchsing.<br>"+JSON.stringify(receipt.error));
        }
    }
    function validateForm() {
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
                y[i].className += " invalid";
                valid = false;
            }
        }
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }
    function fixStepIndicator(n) {
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        x[n].className += " active";
    }
</script>
</body>
</html>
