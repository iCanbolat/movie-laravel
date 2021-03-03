<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">


  @livewireStyles
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.1/dist/alpine.min.js" defer></script>

</head>
<body class="bg-gray-900 text-white font-weight-bold"> 

<div class="container ">
  <nav class="navbar border-b navbar-expand-lg navbar-dark bg-gray-900 ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand " href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="64" height="64"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,41.65625c-35.60937,0 -64.5,28.89063 -64.5,64.5c0,35.60938 28.89063,64.5 64.5,64.5h57.10938c2.28438,0 4.03125,-1.74687 4.03125,-4.03125c0,-2.28438 -1.74687,-4.03125 -4.03125,-4.03125h-57.10937c-31.175,0 -56.4375,-25.2625 -56.4375,-56.4375c0,-31.175 25.2625,-56.4375 56.4375,-56.4375c31.175,0 56.4375,25.2625 56.4375,56.4375c0,16.93125 -7.52605,32.78802 -20.56042,43.53802c-1.74688,1.47813 -2.01353,3.89583 -0.5354,5.6427c1.47812,1.74687 4.0302,2.01615 5.6427,0.53802c14.91563,-12.3625 23.51563,-30.50312 23.51563,-49.71875c0,-35.60937 -28.89062,-64.5 -64.5,-64.5zM86,58.31928c-8.86875,0 -16.125,7.25625 -16.125,16.125c0,9.00312 7.52605,16.39375 16.52917,16.125c8.46563,-0.26875 15.45208,-7.25782 15.72083,-15.72345c0.26875,-9.1375 -7.12188,-16.52655 -16.125,-16.52655zM54.28803,90.03125c-8.90559,0 -16.125,7.21941 -16.125,16.125c0,8.90559 7.21941,16.125 16.125,16.125c8.90559,0 16.125,-7.21941 16.125,-16.125c0,-8.90559 -7.21941,-16.125 -16.125,-16.125zM117.71197,90.03125c-8.90559,0 -16.125,7.21941 -16.125,16.125c0,8.90559 7.21941,16.125 16.125,16.125c8.90559,0 16.125,-7.21941 16.125,-16.125c0,-8.90559 -7.21941,-16.125 -16.125,-16.125zM86,102.125c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125zM86,121.74322c-4.27662,0 -8.37807,1.69888 -11.4021,4.7229c-3.02402,3.02402 -4.7229,7.12548 -4.7229,11.4021c0,8.90559 7.21941,16.125 16.125,16.125c8.90559,0 16.125,-7.21941 16.125,-16.125c0,-4.27662 -1.69888,-8.37807 -4.7229,-11.4021c-3.02402,-3.02402 -7.12548,-4.7229 -11.4021,-4.7229zM163.26563,162.59375c-2.2264,0 -4.03125,1.80485 -4.03125,4.03125c0,2.2264 1.80485,4.03125 4.03125,4.03125c2.2264,0 4.03125,-1.80485 4.03125,-4.03125c0,-2.2264 -1.80485,-4.03125 -4.03125,-4.03125z"></path></g></g></svg></a>

<a href="" class="pt-3 text-uppercase text-bold pr-5 text-decoration-none hover:text-white" >Movie App</a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto pt-3">
      <li class="nav-item active mr-4">
        <a class="nav-link" href="{{ route('movies.index') }}">Movies <span class="sr-only">(current)</span></a>
      </li>
      <li class="item active mr-4 ">
        <a class="nav-link" href="{{ route('tv.index') }}">TV Shows</a>
      </li>
      <li class="item active ">
        <a class="nav-link" href="{{ route('actors.index') }}">Actors</a>
      </li>
    </ul>
    <livewire:search-dropdown/>
  </div>
</nav></div>



  @yield('content')
  
 


  @livewireScripts

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
  @yield('scripts')

</body>
</html>