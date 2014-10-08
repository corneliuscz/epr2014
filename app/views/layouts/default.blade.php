<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konference Evropské příležitosti regionu 2014</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar-wrapper">
      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
          <!-- Nav Toggle -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-main">
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Menu items -->
          <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- <ul class="nav navbar-nav"> -->
            <div class="row menu">
              <div class="col-sm-2 menu-item"><a href="#">Úvod</a></div>
              <div class="col-sm-2 menu-item"><a href="#">Prezentují</a></div>
              <div class="col-sm-2 menu-item menu-item--program"><a href="#">Program</a></div>
              <div class="col-sm-2 menu-item"><a href="#">Registrace</a></div>
              <div class="col-sm-2 menu-item"><a href="#">Partneři</a></div>
              <div class="col-sm-2 menu-item"><a href="#">Kontakty</a></div>
            </div>
            <!-- </ul> -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>

  <div class="jumbotron header--epr">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-1 col-lg-offset-2">
          <img class="logo clearfix" src="/assets/img/epr-logo.png" alt="Evropské příležitosti regionu 2014-20">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-md-3 col-sm-offset-1 col-md-offset-2 col-lg-offset-3">
          <a href="#registrace" class="btn btn-primary btn-lg btn-block" role="button">Registrace</a>
        </div>
      </div>
    </div>
  </div>     
    
  @if (Session::get('flash_message'))
  <div class="flash">
    {{ Session::get('flash_message') }}
  </div>
  @endif   

  @yield('content')

  <div class="wrapper-blue-bottom">
    <div class="container">
      <section id="partneri" class="partneri">
        <div class="row">
          <div class="col-md-12">
            <h2>Partneři</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <img src="http://fakeimg.pl/900x500/" class="img-responsive" alt="Česká Spořitelna a.s.">
          </div>
          <div class="col-sm-4">
            <img src="http://fakeimg.pl/900x500/" class="img-responsive" alt="VŠB-TUO">
          </div>
          <div class="col-sm-4">
            <img src="http://fakeimg.pl/900x500/" class="img-responsive" alt="Planetárium Ostrava">
          </div>
        </div>
      </section>
    </div>
  </div>    

  <div class="container">
    <section id="mapa" class="mapa">
      <div class="row">
        <div class="col-md-12">
          Na konferenci se dostanete tudy :-)
        </div>
      </div>    
    </section>
  </div>
    
  <div class="wrapper-darkblue">
    <div class="container">
      <footer id="kontakt" class="kontakt">
        <div class="row">
          <div class="col-md-12">
            <h2>Kontakty</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <address>
              Úřad Regionální rady Moravskoslezsko<br>
              Na Jízdárně 2824/2<br>
              702 00, Ostrava-Moravská Ostrava
            </address>
            
            <table>
              <tr>
                <td class="th">E-mail:</td>
                <td><a href="mailto:konference@dobra-rada.cz">konference@dobra-rada.cz</a></td>
              </tr>
              <tr valign="top">
                <td rowspan="2" class="th">Telefon:</td>
                <td>+420 552 303 555</td>
              </tr>
              <tr>
                <td>+420 725 743 530</td>
              </tr>
            </table>
          </div>
          <div class="col-sm-6">
            <img src="http://fakeimg.pl/900x200/?text=publicita" class="img-responsive" alt="Spolufinancováno ERDF">
          </div>
        </div>
      </footer>
    </div>
  </div>     
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>
