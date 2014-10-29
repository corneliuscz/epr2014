<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrace EPR 2014</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/admin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Přepnout navigaci</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('admin') }}">Konference EPR 2014</a>
        </div>

      @if(Auth::check())
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li @if (Request::is('admin')) class="active" @endif><a href="{{ URL::to('admin') }}">Účastníci</a></li>
            <li @if (Request::is('admin/odhlaseni')) class="active" @endif><a href="{{ URL::to('admin/odhlaseni') }}">Odhlášení účastníci</a></li>
            <li @if (Request::is('admin/dotazy')) class="active" @endif><a href="{{ URL::to('admin/dotazy') }}">Otázky pro diskuzi</a></li>
            <li @if (Request::is('admin/nastaveni')) class="active" @endif><a href="{{ URL::to('admin/nastaveni') }}">Nastavení konference</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ URL::to('logout') }}">Odhlásit</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      @endif
      </div><!-- /.container-fluid -->
    </nav>

    @if (Session::get('flash_message'))
    <div class="container">
      <div class="flash">
        {{ Session::get('flash_message') }}
      </div>
    </div>
    @endif

    <div class="container">
      @yield('content')
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/admin-scripts.js"></script>
    <script>
    $(document).ready(function() {
      restActions();
    });
    </script>

  </body>
</html>
