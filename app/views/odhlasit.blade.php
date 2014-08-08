<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Odhlášení z konference EPR 2014</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
	<body>
    @if (Session::get('flash_message'))
    <div class="container">
      <div class="flash">
        {{ Session::get('flash_message') }}
      </div>
    </div>
    @endif

    <div class="container">
    <h1>Odhlášení z konference EPR 2014</h1>
    <p>Opravdu se chcete odhlásit z účasti na konferenci Evropské Příležitosti Regionu 2014?</p>

    {{ Form::open(array('action' => array('AttendeesController@deleteme', $attendees->email, $cancel_hash))) }}
      <button type="submit" class="btn btn-warning" id="archive">Odhlásit z konference</button>
    {{ Form::close() }}
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/admin-scripts.js"></script>
  </body>
</html>


