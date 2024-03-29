  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{config('app.name')}} | Sistema de Seguimiento de Egresados</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicons/favicon-16x16.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicons/favicon-32x32.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{asset('js/config.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('vendors/overlayscrollbars/OverlayScrollbars.min.js')}}"></script>
    <script src="{{asset('js/choices/choices.min.js')}}"></script>
    <script src="{{asset('js/flatpickr.js')}}"></script>
    <script src="{{asset('js/typeahead.js')}}"></script>
    <script src="{{asset('js/es.js')}}"></script>

    <script src="{{asset('vendors/echarts/echarts.min.js')}}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="{{asset('vendors/overlayscrollbars/OverlayScrollbars.css')}}" rel="stylesheet">
    <link href="{{asset('css/theme-rtl.css')}}" rel="stylesheet" id="style-rtl">
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" id="style-default">
    <link href="{{asset('css/user-rtl.css')}}" rel="stylesheet" id="user-style-rtl">
    <link href="{{asset('css/user.css')}}" rel="stylesheet" id="user-style-default">
    <link href="{{asset('css/icons/bootstrap-icons.css')}}" rel="stylesheet" id="user-style-default">
    <link href="{{asset('css/main.css')}}" rel="stylesheet" id="user-style-default">
    <link href="{{asset('vendors/flatpickr/flatpickr.min.css')}}" rel="stylesheet" />
    <link href="{{asset('js/choices/choices.min.css')}}" rel="stylesheet" id="user-style-default">

<script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>
