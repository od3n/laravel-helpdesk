<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Learning Laravel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php //var_dump(Request::is('about')); ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ set_active('/') }}"><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
                <li class="{{ set_active('about')}}"><a href="{{ url('/about') }}">About</a></li>
                <li class="{{ set_active('contact') }}"><a href="{{ url('/contact') }}">Contact</a></li>
                <li class="dropdown {{ set_active('users/*') }} {{ set_active('password/*') }}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        @if (Auth::check())
                            <li><a href="{{ url('/users/profile') }}">{{ Auth::user()->name }}</a></li>
                            <li><a href="{{ url('/users/logout') }}">Logout</a></li>
                        @else
                            <li class="{{ set_active('users/register') }}"><a href="{{ url('/users/register') }}">Register</a></li>
                            <li class="{{ set_active('users/login') }}"><a href="{{ url('/users/login') }}">Login</a></li>
                            <li class="{{ set_active('password/email') }}"><a href="{{ url('/password/email') }}">Forgot Password</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>