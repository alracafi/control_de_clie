<!DOCTYPE html>
<html>

<head>
   <title>{{__('labels.title')}}</title>
   {{------------------------------------------CSS---------------------------------------------------------------------------}}

   <link href="{{ asset('boostrap/bootstrap.min.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
   {{--------------------------------JS------------------------------------------------------------}}

   <script src="{{asset('jquery/jquery-3.6.0.min.js')}}"></script>
   <script src="{{asset('boostrap/bootstrap.bundle.min.js') }}"></script>
   <script src="{{asset('sweetalert2/sweetalert2.all.min.js')}}"></script>
   <script src="{{asset('js/app.js')}}"></script>

</head>

<body>


   {{-----------------------------------div de separacion -------------------------------------------------------------------}}

   {{-- <div style="height:75px">--}}
   </div>


   <div class="container-fluid">

      <div style="height: 2em"></div>

      {{-- -----------------------------contenido de la pagina ----------------------------------------------------------------}}

      @yield('content')

      @yield('js')


   </div>




</body>

</html>