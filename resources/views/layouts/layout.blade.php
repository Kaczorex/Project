<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oxygen+Mono" rel="stylesheet"> 
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link href="{{ asset('css/layouts.css') }}" rel="stylesheet">
     

    <title>Document</title>
</head>
<body>
    
    <div class="main-container" >
        <div class="head-menu">
            <div class="row">
                <div class="col-md-3">{{ Auth::user()->name }}</div>
                <div class="col-md-7"></div>
                <div class="col-md-2">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      Wylogowanie się</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
        <div class="body-in-main" >
            <div class="menu-left">
                <div id="cssmenu">
                    <ul>
                        <li><span><a href="#"><center>DOLOG</center></a></span></li>
                        <li> &nbsp  </li>
                        <li  @if (Request::route()->getName() == 'transport.index')  class="active" @else class="" @endif ><a  href="{{route('transport.index')}}"><span>Transport</span></a></li>
              {{--  gdy ma być podświetlenie (aktywny link)
              class=" active - aktywny podświetlenie"
              class=" has-sub - + do rozwijania"
              <li class="active has-sub"><a href="#"><span>CRM</span></a> --}}
              {{--    <li class="" ><a href="#"><span>CRM</span></a></li> --}}
                 <li  @if (Request::route()->getName() == 'prefabrykacja.index')  class="active" @else class="none" @endif  ><a href="{{route('prefabrykacja.index')}}"><span>Prefabrykacja</span></a></li>
                <li @if ((Request::route()->getName() == 'pz.index')||(Request::route()->getName() == 'efaktury.index'))  class="active" @else class="" @endif class="has-sub"><a href="#"><span>Dostawy</span></a>
                    <ul>
                        <li @if (Request::route()->getName() == 'pz.index') class="active" @endif ><a href="{{route('pz.index')}}"><span>PZ</span></a>
                        </li>
                        <li @if (Request::route()->getName() == 'efaktury.index') class="active" @endif ><a href="{{route('efaktury.index')}}"><span>E-faktury</span></a></li>
                        </li>
                    </ul>
                </li>
              <li @if (Request::route()->getName() == 'production.index') class="active" @endif ><a href="{{route('production.index')}}"><span>Produkcja</span></a></li>
                {{-- <li class="has-sub"><a href="#"><span>Firmy Kurierskie</span></a>
                    <ul>
                        <li><a href="#"><span>UPS</span></a></li>
                        <li><a href="#"><span>DHL</span></a></li>
                    </ul>
                    </li>
                    <li class="look"><a href="#"><span>MEGACENNIK</span></a></li>
                <li><a href="#"><span>Cenniki Producentów</span></a></li>
                <li><a href="#"><span>Kontakty Dorian</span></a></li>
                <li><a href="#"><span>Wnioski o urlop</span></a></li>
                <li><a href="#"><span>Logo i Papier Firmowy</span></a></li>
                <li><a href="#"><span>Nowości asortymentowe</span></a></li>
                <li class="last"><a href="#"><span>Wyloguj</span></a></li> --}}
            </ul>
        </div>
    </div>
    <div class="content-body">   @yield('content') <br></div>
</div>
</div>
{{-- 
 <style>


 .dol{
     height: 100%; }
 </style>



<div class='g' style="background:red;">b</div>

<div class="dol" style="background:blue">a</div> --}}

</body>
<footer>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
      $(function() {
        $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
      $(function() {
        $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' });
    });
</script>
</footer>
</html>