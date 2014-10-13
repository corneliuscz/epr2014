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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-4032099-2', 'auto');
      ga('send', 'pageview');
    </script>
    <div class="navbar-wrapper" id="top">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
              <div class="col-sm-2 menu-item"><a href="#top">Úvod</a></div>
              <div class="col-sm-2 menu-item"><a href="#prezentuji">Hosté</a></div>
              <div class="col-sm-2 menu-item menu-item--program"><a href="#program">Program</a></div>
              <div class="col-sm-2 menu-item"><a href="#registrace">Registrace</a></div>
              <div class="col-sm-2 menu-item"><a href="#partneri">Partneři</a></div>
              <div class="col-sm-2 menu-item"><a href="#mapa">Místo</a></div>
            </div>
            <!-- </ul> -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>

  <div class="jumbotron header--epr">
    <div class="container">
      <div class="row">
        <div class="hidden-xs col-sm-5 col-sm-offset-1 col-xs-offset-1 col-md-offset-1 col-lg-offset-2">
          <img class="logo clearfix" src="/assets/img/epr-logo.png" alt="Evropské příležitosti regionu 2014-20">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 col-md-3 col-md-offset-2 col-lg-offset-3">
          <a href="#registrace" class="btn btn-primary btn-lg btn-block btn-registrace" role="button">Registrace</a>
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
          <div class="col-sm-12 loga-partneru">
            <a href="http://www.dobra-rada.cz" title="Regionální rada Moravskoslezsko"><img src="/assets/img/logo_dark-rrms.png" width="180" height="90" alt="Regionální rada Moravskoslezsko"></a>
            <a href="http://www.nejkacka.eu" title="Nejkačka.eu"><img src="/assets/img/logo_dark-nejkacka.png" width="335" height="80" alt="Regionální rada Moravskoslezsko"></a><br>
            <a href="http://www.csas.cz" title="Česká Spořitelna a.s."><img src="/assets/img/logo_dark-csas.png" width="180" height="80" alt="Česká Spořitelna a.s."></a>
            <a href="http://www.vsb.cz" title="VŠB-TUO"><img src="/assets/img/logo_dark-vsb.png" width="95" height="110" alt="VŠB-TUO"></a>
            <a href="http://planetarium.vsb.cz" title="VŠB-TUO"><img src="/assets/img/logo_dark-planetarium.png" width="250" height="80" alt="Planetárium Ostrava"></a>
          </div>
        </div>
      </section>
    </div>
  </div>

  <div class="wrapper-misto" id="mapa">
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
                <td>+420 552 303 545</td>
              </tr>
            </table>
          </div>
          <div class="col-sm-6">
            <img src="/assets/img/banner.png" class="img-responsive" alt="Spolufinancováno ERDF">
          </div>
        </div>
      </footer>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <script src="/assets/js/mapa.js"></script>
  </body>
</html>
