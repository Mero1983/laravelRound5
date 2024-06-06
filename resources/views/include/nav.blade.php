
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Clients</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('addClient')}}">Add</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
      <li><a href="{{route('Clients')}}">Clients</a></li>
      </li>
      <li><a href="{{route('trashClient')}}">Trash</a></li>
      @yield('menu')
      @stack('submenu')
    </ul>
  </div>
</nav>