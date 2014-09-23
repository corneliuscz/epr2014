@extends('layouts.default')

@section('content')
<div class="container">
<section id="prezentuji" class="prezentuji">

<div class="row">
  <div class="col-md-12">
    <h2>Prezentují</h2>
  </div>
</div>  

<div class="row">
  <div class="col-sm-4 col-lg-3">
    <img src="/assets/img/photo-template.png" class="img-responsive" alt="Thomas Baer Foto">
    <div class="ucinkujici">Thomas Baer <em>Evropská komise</em></div>
  </div>
  <div class="col-sm-4 col-lg-3">
    <img src="/assets/img/photo-template.png" class="img-responsive" alt="Kateřina Dostálová Foto">
    <div class="ucinkujici">Kateřina Dostálová <em>Regionální rada Moravskoslezsko</em></div>
  </div>
  <div class="col-sm-4 col-lg-3">
    <img src="/assets/img/photo-template.png" class="img-responsive" alt="Klára Dostálová Foto">
    <div class="ucinkujici">Klára Dostálová <em>Ministerstvo pro místní rozvoj</em></div>
  </div>
  <div class="clearfix visible-sm-block"></div>
  <div class="col-sm-4 col-lg-3">
    <img src="/assets/img/photo-template.png" class="img-responsive" alt="Jan Jedlička Foto">
    <div class="ucinkujici">Jan Jedlička <em>Česká spořitelna </em></div>
  </div>
  <div class="clearfix visible-lg-block"></div>
  <div class="col-sm-4 col-lg-3">
    <img src="/assets/img/photo-template.png" class="img-responsive" alt="Stefania Koczar-Sikora Foto">
    <div class="ucinkujici">Stefania Koczar-Sikora <em>ROP Polsko</em></div>
  </div>
  <div class="col-sm-4 col-lg-3">
    <img src="/assets/img/photo-template.png" class="img-responsive" alt="Václav Palička Foto">
    <div class="ucinkujici">Václav Palička <em>Statutární město Ostrava</em></div>
  </div>
  <div class="clearfix visible-sm-block"></div>
  <div class="col-sm-4 col-lg-3">
    <img src="/assets/img/photo-template.png" class="img-responsive" alt="David Sventek Foto">
    <div class="ucinkujici">David Sventek <em>IROP</em></div>
  </div>
</div>      

</section>
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
            <div class="col-sm-4 program--cas">9:00 - 9:15 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Přivítání hostů konference <em>(I. Vondrák)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">9:15 - 9:20 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Zdravice - videovstup <em>(p. Jourová)</em></div>  
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">9:20 - 9:30 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Úvodní slovo, přivítání, výsledky ROP <em>(Kateřina Dostálová)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">9:30 - 10:00 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Role MMR v novém období - implementační struktura <em>(Klára Dostálová)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:00 - 10:30 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Představení IROP <em>(D. Sventek)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:30 - 11:00 <span>Foyer</span></div>
            <div class="col-sm-8 program--prednaska">Coffee break</div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">11:00 - 11:10 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Co říkají hvězdy na léta 2014-2020 <em>(Planetárium Ostrava)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">11:10 - 13:00 <span>Hlavní sál</span></div>
            <div class="col-sm-8 program--prednaska">Diskuze: Smysluplné projekty v období 2014-2020 <em>(Kateřina Dostálová, Jan Jedlička, Thomas Baer, David Sventek, Stefania Koczar-Sikora, Václav Palička)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">13:00 - 14:00 <span>Foyer</span></div>
            <div class="col-sm-8 program--prednaska">Oběd</div>
          </div>
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
            <div class="col-sm-4 program--cas">14:00 - 15:30</div>
            <div class="col-sm-8 program--prednaska">Sekce pro nové starosty <em>(zástupce starostů)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">14:00 - 15:30</div>
            <div class="col-sm-8 program--prednaska">Sekce pro školy <em>(zástupce škol)</em></div>  
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">14:00 - 15:30</div>
            <div class="col-sm-8 program--prednaska">Klub fanoušků integrovaných přístupů <em>(Daniel Konczyna, Úřad Regionální rady Moravskoslezsko)</em></div>
          </div>
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
            <div class="col-sm-4 program--cas">9:00 - 15:00</div>
            <div class="col-sm-8 program--prednaska">Stánky s informacemi k jednotlivým OP <em>(jednotlivé OP/MAS)</em></div>
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">10:00 - 11:00</div>
            <div class="col-sm-8 program--prednaska">Osobní konzultace u stánků jednotlivých OP <em>(jednotlivé OP/MAS)</em></div>  
          </div>
          <div class="row program--radka">
            <div class="col-sm-4 program--cas">13:00 - 14:30</div>
            <div class="col-sm-8 program--prednaska">Osobní konzultace u stánků jednotlivých OP <em>(jednotlivé OP/MAS)</em></div>  
          </div>
        </div>
      </div>    

    </section>

  </div>  
</div>

<div class="container">
  <section id="registrace" class="registrace">

    <div class="row">
      <div class="col-md-12">
        <h2>Registrace</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <!-- Přihlášených je už: {{ $attendeesCount }}-->

        @if ($attendeesCount < 5)

          @if ($errors->has())
            <ul>
              {{ $errors->first('firstname', '<li>:message</li>'); }}
              {{ $errors->first('surname', '<li>:message</li>'); }}
              {{ $errors->first('organisation', '<li>:message</li>'); }}
              {{ $errors->first('email', '<li>:message</li>'); }}
              {{ $errors->first('terms', '<li>:message</li>'); }}
              {{ $errors->first('hlavni_sal', '<li>:message</li>'); }}
            </ul>
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

      <fieldset>
        
      <div class="form-group @if ($errors->has('terms')) has-error @endif">
        {{ Form::checkbox('terms', 1) }}
        {{ Form::label('terms', 'Souhlasím s podmínkami registrace na konferenci EPR 2014', ['class' => 'label--tmavy']) }}

        @if ($errors->has('terms'))
          <p class="help-block">{{ $errors->first('terms') }}</p>
        @endif
        </div>
      
      </fieldset>

      <fieldset>
        <h3>Hlavní program</h3>

        <div class="form-group @if ($errors->has('hlavni_sal')) has-error @endif">
          {{ Form::checkbox('hlavni_sal', 'hlavni-sal', true) }}
          {{ Form::label('hlavni_sal', 'Chci se zúčastnit hlavního programu', ['class' => 'label--tmavy']) }}

          @if ($errors->has('hlavni_sal'))
            <p class="help-block">{{ $errors->first('hlavni_sal') }}</p>
          @endif
        </div>
      </fieldset>

      <fieldset>
        <h3>Odpolední program</h3>

        <div class="form-group @if ($errors->has('seminar')) has-error @endif">
          {{ Form::radio('seminar', 's1') }}
          {{ Form::label('seminar', 'Sekce pro nové starosty', ['class' => 'label--tmavy']) }}<br>

          {{ Form::radio('seminar', 's2') }}
          {{ Form::label('seminar', 'Sekce pro školy', ['class' => 'label--tmavy']) }}<br>

          {{ Form::radio('seminar', 's3') }}
          {{ Form::label('seminar', 'Klub fanoušků integrovaných přístupů', ['class' => 'label--tmavy']) }}

          @if ($errors->has('seminar'))
            <p class="help-block">{{ $errors->first('seminar') }}</p>
          @endif
        </div>

      </fieldset>

      {{ Form::submit('Zaregistrovat', ['class' => 'btn btn-primary btn-lg center-block']) }}

        {{ Form::close() }}

      @else

      Je nám líto, ale kapacita konference byla vyčerpána.

      @endif
      </div>
    </div>  

  </section> 
  
</div> 
@stop
