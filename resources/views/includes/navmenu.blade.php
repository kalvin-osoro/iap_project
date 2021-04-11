<!-- Navigation bar -->
<nav class="navbar">
    <div class="container">
      <!-- Logo -->
      <div class="pull-left">
    <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>
        <div class="logo-wrapper">
        <a class="logo" href="/"><h4>School website</h4></a>
        <a class="logo-alt" href="/"><h3>School website/h3></a>
        </div>
      </div>
      <!-- END Logo -->
      <!-- User account -->
      <div class="pull-right user-login">
        <a class="btn btn-sm btn-primary" title="Login" href="/login">Login</a> <a class="btn btn-sm btn-primary" title="Register" href="/register">register</a>
      </div>
      <!-- END User account -->

      <!-- Navigation menu -->
      <ul class="nav-menu">
        <li><a class="active" href="/">Home</a></li>
        <li><a href="{{route('events.list')}}">Events</a> </li>
        <li> <a href="{{url('/student')}}">Student Management System</a> </li>
        <li> <a href="{{url('/studentlist')}}">Current news</a> </li>

        {{-- <li><a href="#">add link</a></li> --}}
        {{-- <li><a href="#">add link</a></li> --}}
      </ul>
      <!-- END Navigation menu -->
    </div>
  </nav>
<!-- Site header -->
