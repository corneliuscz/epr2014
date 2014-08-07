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
        </ul>
      @endif

  {{ Form::open(array('route' => 'attendees.store')) }}

  <div class="form-group @if ($errors->has('firstname')) has-error @endif">
		{{ Form::label('firstname', 'Jméno:') }}
    {{ Form::text('firstname') }}
    @if ($errors->has('firstname')) <p class="help-block">{{ $errors->first('firstname') }}</p> @endif
	</div>

  <div class="form-group @if ($errors->has('surname')) has-error @endif">
		{{ Form::label('surname', 'Příjmení:') }}
		{{ Form::text('surname') }}
    @if ($errors->has('surname')) <p class="help-block">{{ $errors->first('surname') }}</p> @endif
	</div>

  <div class="form-group @if ($errors->has('organisation')) has-error @endif">
		{{ Form::label('organisation', 'Organizace:') }}
		{{ Form::text('organisation') }}
    @if ($errors->has('organisation')) <p class="help-block">{{ $errors->first('organisation') }}</p> @endif
	</div>

  <div class="form-group @if ($errors->has('email')) has-error @endif">
		{{ Form::label('email', 'E-mail:') }}
    {{ Form::email('email') }}
    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
	</div>

  <div class="form-group @if ($errors->has('terms')) has-error @endif">
		{{ Form::label('terms', 'Souhlasím s podmínkami registrace na konferenci EPR 2014') }}
		{{ Form::checkbox('terms', 1) }}
    @if ($errors->has('terms')) <p class="help-block">{{ $errors->first('terms') }}</p> @endif
	</div>

		{{ Form::submit('Přihlásit') }}

	{{ Form::close() }}

  @else

  Je nám líto, ale kapacita konference byla vyčerpána.

  @endif

@stop
