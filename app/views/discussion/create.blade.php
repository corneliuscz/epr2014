@extends('layouts.diskuze')

@section('content')
<div class="wrapper-diskuze">
  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">Vaše otázka na diskutující</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-push-2">

        @if ($errors->has())
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('asker', '<p>:message</p>'); }}
            {{ $errors->first('question', '<p>:message</p>'); }}
        </div>
        @endif

        {{ Form::open(array('route' => 'dotazy.store', 'class' => 'form-horizontal')) }}

        <div class="form-group @if ($errors->has('question')) has-error @endif">
          {{ Form::label('question', 'Vaše otázka:', array('class' => 'col-sm-2 control-label')) }}
          <div class="col-sm-10">
            {{ Form::textarea('question', null, ['class' => 'form-control']) }}
            @if ($errors->has('question')) <p class="help-block">{{ $errors->first('question') }}</p> @endif
          </div>
        </div>

        <div class="form-group @if ($errors->has('asker')) has-error @endif">
          {{ Form::label('asker', 'Vaše jméno:', array('class' => 'col-sm-2 control-label')) }}
          <div class="col-sm-10">
            {{ Form::text('asker', null, ['class' => 'form-control']) }}
            @if ($errors->has('asker')) <p class="help-block">{{ $errors->first('asker') }}</p> @endif
          </div>
        </div>

        {{ Form::submit('Vložit dotaz', ['class' => 'btn btn-primary btn-lg center-block']) }}

        {{ Form::close() }}

      </div>
    </div>

  </div>
</div>
@stop
