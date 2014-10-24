@extends('layouts.default')

@section('content')
<div class="wrapper-white-top">
  <div class="container">
    <section id="prezentuji" class="prezentuji">

    <div class="row">
      <div class="col-md-12">
        <h2>Hosté</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <img src="/assets/img/vicenova.png" class="img-responsive" alt="Milena Vicenová Foto">
        <div class="ucinkujici">Milena Vicenová <em>Ministerstvo pro místní rozvoj</em></div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <img src="/assets/img/jedlicka.png" class="img-responsive" alt="Jan Jedlička Foto">
        <div class="ucinkujici">Jan Jedlička <em>Česká spořitelna, a.s.</em></div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <img src="/assets/img/sikora.png" class="img-responsive" alt="Stefania Koczar-Sikora Foto">
        <div class="ucinkujici">Stefania Koczar-Sikora <em>Slezské vojvodství, Polsko</em></div>
      </div>
      <div class="clearfix visible-md-block"></div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <img src="/assets/img/mazal.png" class="img-responsive" alt="Rostislav Mazal Foto">
        <div class="ucinkujici">Rostislav Mazal <em>Ministerstvo pro místní rozvoj</em></div>
      </div>
      <div class="clearfix visible-sm-block"></div>
      <div class="clearfix visible-lg-block"></div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <img src="/assets/img/dostalovak.png" class="img-responsive" alt="Kateřina Dostálová Foto">
        <div class="ucinkujici">Kateřina Dostálová <em>Úřad Regionální rady Moravskoslezsko</em></div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <img src="/assets/img/palicka.png" class="img-responsive" alt="Václav Palička Foto">
        <div class="ucinkujici">Václav Palička <em>Statutární město Ostrava</em></div>
      </div>
    </div>

    </section>
  </div>
</div>

<div class="wrapper-blue">
  <div class="container">

    <section id="program" class="program">

      <div class="row">
        <div class="col-md-12">
          <h2>Hlavní program</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">8:00 - 9:00</div>
            <div class="col-sm-8 program--prednaska">Registrace (Foyer)</div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">9:00 - 9:10 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Přivítání hostů konference <em>Ivo Vondrák, Vysoká škola báňská - Technická univerzita Ostrava</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">9:10 - 9:30 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Výsledky a budoucnost ROP Moravskoslezsko <em>Kateřina Dostálová, Úřad Regionální rady Moravskoslezsko</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">9:30 - 10:00 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Implementační struktura pro léta 2014-20 <em>Zástupce Ministerstva pro místní rozvoj</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:00 - 10:30 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Představení Integrovaného regionálního operačního programu (IROP) <em>Rostislav Mazal,  Ministerstvo pro místní rozvoj</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:30 - 11:00 </div>
            <div class="col-sm-8 program--prednaska">Přestávka s občerstvením (Foyer)</div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">11:00 - 11:10 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Výlet do paralelních světů Evropské unie <em>Kateřina Dostálová, Daniel Konczyna, Úřad Regionální rady Moravskoslezsko</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">11:10 - 13:00 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Panelová diskuze: Smysluplné investice v&nbsp;období 2014-20 a&nbsp;jiná hvězdná témata <em>Milena Vicenová, Jan Jedlička, Stefania Koczar-Sikora, David Sventek, Václav Palička</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">13:00 - 14:00 </div>
              <div class="col-sm-8 program--prednaska">Oběd (Foyer)</div>
          </div>
<!--          <div class="row program--pdf">
            <div class="col-md-12">
              <img src="/assets/img/ikona-pdf.png" alt="PDF s programem"> <a href="/assets/program.pdf" title="PDF s programem konference pro tisk" class="btn btn-primary btn-lg">PDF s programem</a>
            </div>
          </div>  -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2>Odpolední program</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">14:00 - 15:30 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Sekce nejen pro nové starosty <em>Hana Gavlasová (Úřad Regionální rady Moravskoslezsko), zástupce starostů</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">14:00 - 15:30 <span>Sál 1</span></div>
            <div class="col-sm-8 program--prednaska">Sekce pro školy <em>Kateřina Hlostová (Úřad Regionální rady Moravskoslezsko), zástupce OP VVV, zástupce škol</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">14:00 - 15:30 <span>Sál 2</span></div>
            <div class="col-sm-8 program--prednaska">Problematika Integrovaných teritoriálních investic pro poradenské agentury <em>Daniel Konczyna (Úřad Regionální rady Moravskoslezsko)</em></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2>Doprovodné akce</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:00 - 11:00, 13:00 - 14:30 <span>Foyer</span></div>
            <div class="col-sm-8 program--prednaska">Osobní konzultace na infostáncích se zástupci operačních programů</div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:00 - 14:30 <span>Vchod do Auly</span></div>
            <div class="col-sm-8 program--prednaska">Pozorování Slunce s Planetáriem Ostrava <em>(v případě příznivého počasí)</em></div>
          </div>
        </div>
      </div>

    </section>

  </div>
</div>

<div class="wrapper-white">
  <div class="container">

    <section id="registrace" class="registrace">

    <div class="row">
      <div class="col-md-12">
        <h2>Registrace</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">

      @if ($regForm)

        @if ($attendeesCount['hlavni'] < $options['kapacita'])

          @if ($errors->has())
            <div class="alert alert-danger">
              {{ $errors->first('firstname', '<p>:message</p>'); }}
              {{ $errors->first('surname', '<p>:message</p>'); }}
              {{ $errors->first('organisation', '<p>:message</p>'); }}
              {{ $errors->first('email', '<p>:message</p>'); }}
              {{ $errors->first('terms', '<p>:message</p>'); }}
              {{ $errors->first('hlavni_sal', '<p>:message</p>'); }}
            </div>
          @endif

        {{ Form::open(array('route' => 'attendees.store')) }}

        <div class="form-group @if ($errors->has('firstname')) has-error @endif">
          {{ Form::label('firstname', 'Jméno (povinné)', ['class' => 'label--modry']) }}
          {{ Form::text('firstname', null, ['class' => 'form-control']) }}

          @if ($errors->has('firstname'))
            <p class="help-block">{{ $errors->first('firstname') }}</p>
          @endif
        </div>

        <div class="form-group @if ($errors->has('surname')) has-error @endif">
          {{ Form::label('surname', 'Příjmení (povinné)', ['class' => 'label--modry']) }}
          {{ Form::text('surname', null, ['class' => 'form-control']) }}

          @if ($errors->has('surname'))
            <p class="help-block">{{ $errors->first('surname') }}</p>
          @endif
        </div>

        <div class="form-group @if ($errors->has('organisation')) has-error @endif">
          {{ Form::label('organisation', 'Organizace (povinné)', ['class' => 'label--modry']) }}
          {{ Form::text('organisation', null, ['class' => 'form-control']) }}

          @if ($errors->has('organisation'))
            <p class="help-block">{{ $errors->first('organisation') }}</p>
          @endif
        </div>

        <div class="form-group @if ($errors->has('email')) has-error @endif">
          {{ Form::label('email', 'E-mail (povinné)', ['class' => 'label--modry']) }}
          {{ Form::email('email', null, ['class' => 'form-control']) }}

          @if ($errors->has('email'))
            <p class="help-block">{{ $errors->first('email') }}</p>
          @endif
        </div>

        <fieldset class="inline-label">
          <div class="form-group @if ($errors->has('terms')) has-error @endif">
            {{ Form::checkbox('terms', 1) }}
            {{ Form::label('terms', 'Souhlasím se zpracováním poskytnutých osobních údajů.*', ['class' => 'label--tmavy']) }}

            @if ($errors->has('terms'))
              <p class="help-block">{{ $errors->first('terms') }}</p>
            @endif
            <p class="souhlas-maly small">* Souhlasím se zpracováním osobních údajů v&nbsp;souladu se zákonem č.&nbsp;101/2000 Sb. o&nbsp;ochraně osobních údajů a o&nbsp;změně některých zákonů, ve znění pozdějších předpisů, za účelem registrace na&nbsp;konferenci Evropské příležitosti regionu 2014, konané dne 27.11.2014 v&nbsp;Ostravě, a následným zasíláním informací e-mailem.</p>
          </div>

        </fieldset>

        <fieldset class="inline-label">
          <h3>Hlavní program</h3>

          <div class="form-group @if ($errors->has('hlavni_sal')) has-error @endif">
            {{ Form::checkbox('hlavni_sal', 'hlavni-sal', false) }}
            {{ Form::label('hlavni_sal', 'Chci se zúčastnit hlavního programu', ['class' => 'label--tmavy']) }} (volná místa {{ $options['kapacita']-$attendeesCount['hlavni'] }})

            @if ($errors->has('hlavni_sal'))
              <p class="help-block">{{ $errors->first('hlavni_sal') }}</p>
            @endif
          </div>
        </fieldset>

        <fieldset class="inline-label">
          <h3>Odpolední program</h3>

          <div class="form-group @if ($errors->has('seminar')) has-error @endif">
            @if ($attendeesCount['s1'] < $options['kapacita_s1'])
              {{ Form::radio('seminar', 's1') }}
            @else
              <input name="seminar" value="s1" type="radio" disabled>
            @endif
              {{ Form::label('seminar', 'Sekce nejen pro nové starosty', ['class' => 'label--tmavy']) }}
            @if ($attendeesCount['s1'] < $options['kapacita_s1'])
              <span class="kapacita">(volná místa: {{ $volne['s1'] }})</span><br>
            @else
              <span class="kapacita">(kapacita vyčerpána)</span><br>
            @endif

            @if ($attendeesCount['s2'] < $options['kapacita_s2'])
              {{ Form::radio('seminar', 's2') }}
            @else
              <input name="seminar" value="s2" type="radio" disabled>
            @endif
              {{ Form::label('seminar', 'Sekce pro školy', ['class' => 'label--tmavy']) }}
            @if ($attendeesCount['s2'] < $options['kapacita_s2'])
              <span class="kapacita">(volná místa: {{ $volne['s2'] }})</span><br>
            @else
              <span class="kapacita">(kapacita vyčerpána)</span><br>
            @endif

            @if ($attendeesCount['s3'] < $options['kapacita_s3'])
              {{ Form::radio('seminar', 's3') }}
            @else
              <input name="seminar" value="s3" type="radio" disabled>
            @endif
              {{ Form::label('seminar', 'Problematika Integrovaných teritoriálních investic pro poradenské agentury', ['class' => 'label--tmavy']) }}
            @if ($attendeesCount['s3'] < $options['kapacita_s3'])
              <span class="kapacita">(volná místa: {{ $volne['s3'] }})</span><br>
            @else
              <span class="kapacita">(kapacita vyčerpána)</span><br>
            @endif

            @if ($errors->has('seminar'))
              <p class="help-block">{{ $errors->first('seminar') }}</p>
            @endif
          </div>
        </fieldset>

        {{ Form::submit('Zaregistrovat', ['class' => 'btn btn-primary btn-lg center-block']) }}

        {{ Form::close() }}

        @else
          <p class="text-center big">Je nám líto, ale kapacita konference byla vyčerpána.</p>
        @endif

      @else
        <p class="text-center big">Registrace na letošní ročník konference Evropské příležitosti regionu {{ $regDate }}</p>
      @endif
      </div>
    </div>

    </section>

  </div>
</div>
@stop

@section('countdownscript')
  <script>
  /*
   * Countdown plugin
   */
    $("#countdown").countdown("{{{ $zacatek_registrace }}}", function(event) {
      $(this).text(
        event.strftime('%-D %!D:den,dny;, %-H %!H:hodinu,hodin;, %-M %!M:minutu,minut; a %-S %!S:vteřinu,vteřin;')
      );
    })
    .on('finish.countdown', function(event) {
      $(this).text('Pokud se vám neobnovila stránka stiskněte Ctrl+R');
      window.location.href ='http://konference.dobra-rada.cz/#registrace';
    });;
  </script>
@stop
