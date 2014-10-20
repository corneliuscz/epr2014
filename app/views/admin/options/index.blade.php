@extends('layouts.admin')

@section('content')
  <h2>Nastavení konference</h2>

  @foreach ($options as $option)

    {{ Form::model($option, ['method' => 'PATCH',
                             'route' => ['options.update', $option->id]]) }}

    <div class="form-group @if ($errors->has('value')) has-error @endif">
      {{ Form::label('value', $option->name) }}
      {{ Form::text('value') }}
        @if ($errors->has('value')) <p class="help-block">{{ $errors->first('value') }}</p> @endif
      {{ Form::submit('Uložit hodnotu') }}
    </div>

    {{ Form::close() }}

  @endforeach

@stop
