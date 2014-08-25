@extends('layouts.default')

@section('content')

  <h1> Web konference </h1>

  Přihlášených je už: {{ $attendeesCount }}

  <h2>Přihlášení na konferenci</h2>

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
		{{ Form::label('firstname', 'Jméno:') }}
    {{ Form::text('firstname') }}

    @if ($errors->has('firstname'))
      <p class="help-block">{{ $errors->first('firstname') }}</p> 
    @endif
	</div>

  <div class="form-group @if ($errors->has('surname')) has-error @endif">
		{{ Form::label('surname', 'Příjmení:') }}
    {{ Form::text('surname') }}

    @if ($errors->has('surname')) 
      <p class="help-block">{{ $errors->first('surname') }}</p> 
    @endif
	</div>

  <div class="form-group @if ($errors->has('organisation')) has-error @endif">
		{{ Form::label('organisation', 'Organizace:') }}
    {{ Form::text('organisation') }}

    @if ($errors->has('organisation'))
      <p class="help-block">{{ $errors->first('organisation') }}</p>
    @endif
	</div>

  <div class="form-group @if ($errors->has('email')) has-error @endif">
		{{ Form::label('email', 'E-mail:') }}
    {{ Form::email('email') }}

    @if ($errors->has('email'))
      <p class="help-block">{{ $errors->first('email') }}</p> 
    @endif
  </div>

  <div class="form-group @if ($errors->has('terms')) has-error @endif">
    {{ Form::checkbox('terms', 1) }}
		{{ Form::label('terms', 'Souhlasím s podmínkami registrace na konferenci EPR 2014') }}

    @if ($errors->has('terms')) 
      <p class="help-block">{{ $errors->first('terms') }}</p> 
    @endif
	</div> 

  <fieldset>
    <h3>Hlavní program</h3>

    <div class="form-group @if ($errors->has('hlavni_sal')) has-error @endif">
      {{ Form::checkbox('hlavni_sal', 'hlavni-sal', true) }}
      {{ Form::label('hlavni_sal', 'Chci se zúčastnit hlavního programu') }}

      @if ($errors->has('hlavni_sal')) 
        <p class="help-block">{{ $errors->first('hlavni_sal') }}</p> 
      @endif
    </div>

    <h3>Odpolední program</h3>

    <div class="form-group @if ($errors->has('seminar')) has-error @endif">
      {{ Form::radio('seminar', 's1') }}
      {{ Form::label('seminar', 'Sekce pro nové starosty') }}<br>

      {{ Form::radio('seminar', 's2') }}
      {{ Form::label('seminar', 'Sekce pro školy') }}<br>

      {{ Form::radio('seminar', 's3') }}
      {{ Form::label('seminar', 'Klub fanoušků integrovaných přístupů') }}

      @if ($errors->has('seminar')) 
        <p class="help-block">{{ $errors->first('seminar') }}</p>
      @endif
    </div>

  </fieldset>

  {{ Form::submit('Přihlásit') }}

	{{ Form::close() }}

  @else

  Je nám líto, ale kapacita konference byla vyčerpána.

  @endif

@stop
