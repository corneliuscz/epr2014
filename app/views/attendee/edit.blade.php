@extends('layouts.admin')

@section('content')

<h2>Editace účastníka konference</h2>

@if ($errors->has())
  <ul>
    {{ $errors->first('firstname', '<li>:message</li>'); }}
    {{ $errors->first('surname', '<li>:message</li>'); }}
    {{ $errors->first('organisation', '<li>:message</li>'); }}
    {{ $errors->first('email', '<li>:message</li>'); }}
    {{ $errors->first('terms', '<li>:message</li>'); }}
  </ul>
@endif

{{ Form::model($attendee, ['method' => 'PATCH', 'route' => ['attendees.update', $attendee->id]]) }}

  {{ Form::label('firstname', 'Jméno:') }}
  {{ Form::text('firstname') }}

  {{ Form::label('surname', 'Příjmení:') }}
  {{ Form::text('surname') }}

  {{ Form::label('organisation', 'Organizace:') }}
  {{ Form::text('organisation') }}

  {{ Form::label('email', 'E-mail:') }}
  {{ Form::email('email') }}

  {{ Form::label('terms', 'Souhlasím s podmíkami registrace na konferenci EPR 2014') }}
  {{ Form::checkbox('terms', 1) }}

  {{ Form::submit('Přihlásit') }}

{{ Form::close() }}

@stop
