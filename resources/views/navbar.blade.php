<nav class="light-blue lighten-1">
  <div class="nav-wrapper container">
    <a href="/" class="brand-logo">
      <img src="{{url('image/logo.png')}}" style="height:1.5em; margin:0.25em;" >
    </a>
    <a href="#" data-target="mobile-sidenav" class="sidenav-trigger">
      <i class="material-icons">menu</i>
    </a>
    <ul class="right hide-on-med-and-down">
      <li><a href="{{url('home')}}">Home</a></li>
      <li><a href="{{url('terms')}}">Terms</a></li>
      <li><a href="{{url('apply')}}">Apply</a></li>
      <li><a href="{{url('admin')}}">Admin</a></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-sidenav">
  <li><a href="{{url('home')}}">Home</a></li>
  <li><a href="{{url('terms')}}">Terms</a></li>
  <li><a href="{{url('apply')}}">Apply</a></li>
  <li><a href="{{url('admin')}}">Admin</a></li>
</ul>