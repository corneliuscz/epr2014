@extends('layouts.diskuze')

@section('content')
<div class="wrapper-diskuze">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">Otázky pro diskutující</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h3>Otázka</h3>
        <blockquote>
          <p>It would be nice if we could store this on an external file and then just read everything into the data variable. To make things easier, I’m going to use jQuery, so we’ll have to load that library first and then call it’s getJSON function. Here’s what our entire page’s code looks like.</p>
          <footer><cite>Anonymní dotaz</cite></footer>
        </blockquote>
      </div>
      <div class="col-md-6">
        <h3>Poslední dotazy</h3>
        <div id="otazky">
        @foreach ($questions as $question)
          <blockquote>
            <p>{{ nl2br(e($question->question)) }}</p>
            <footer><cite>{{{ isset( $question->asker ) ?  $question->asker : 'Anonymní dotaz' }}}</cite></footer>
          </blockquote>
        @endforeach
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-push-2">
          <p class="text-center">Své dotazy pro diskutující můžete posílat pomocí svých mobilních telefonů nebo počítačů z webu konference na&nbsp;adrese: <a href="http://konference.dobra-rada.cz/diskuze">konference.dobra-rada.cz/diskuze</a></p>
      </div>
    </div>

  </div>
</div>
@stop

@section('refreshscript')
    <script>
      $("document").ready(function(){
        setInterval( function () {
            $.ajax({
                type: "GET",
                url : "nactiotazky",
                success : function(data){
                  data = JSON.parse(data);
                  console.log(data);

                  var output='';
                  for (var i in data) {
                    output+="<blockquote><p>" + data[i].question + " </p> <footer><cite>" + data[i].asker + "</cite></footer></blockquote>";
                  }
                  $('#otazky').html(output);
                }
              //failure :
            },"json");
        }, 10000);
      });//end of document ready function

    </script>
@stop
