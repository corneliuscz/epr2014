@extends('layouts.admin')

@section('content')
  <h2>Otázky pro diskuzi</h2>

  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Jméno</th>
          <th>Otázka</th>
          <th>Přidáno</th>
          <th>Stav</th>
          <th colspan="3">Akce</th>
        </tr>
      </thead>
      @foreach ($questions as $question)
      <tr>
        <td>{{{ $question->asker }}}</td>
        <td>{{ nl2br(e($question->question)) }}</td>
        <td>{{{ $question->created_at }}}</td>
        <td>
          @if ($question->qstatus == 0)
            <span class="glyphicon glyphicon-asterisk"></span>
          @elseif ($question->qstatus == 1)
            <span class="glyphicon glyphicon-eye-open"></span>
          @elseif ($question->qstatus == 2)
            <span class="glyphicon glyphicon-ok"></span>
          @elseif ($question->qstatus == 3)
            <span class="glyphicon glyphicon-trash"></span>
          @else
            <span class="glyphicon glyphicon-question-sign"></span>
          @endif
        </td>
        <td>
          @if ($question->qstatus < 1 || $question->qstatus > 2 )
            <a href="{{ URL::route('questions.update', $question->id) }}" title="Zveřejnit otázku" data-method="PATCH" data-value="1">
          @endif
            <span class="glyphicon glyphicon-ok-circle"></span>
          @if ($question->qstatus < 1 || $question->qstatus > 2 )
          </a>
          @endif
        </td>
        <td>
          @if ($question->qstatus < 2)
            <a href="{{ URL::route('questions.update', $question->id) }}" title="Zodpovězená" data-method="PATCH" data-value="2">
          @endif
            <span class="glyphicon glyphicon-ok"></span>
          @if ($question->qstatus < 2)
            </a>
          @endif
        </td>
        <td>
          @if ($question->qstatus < 3)
            <a href="{{ URL::route('questions.update', $question->id) }}" title="SPAM" data-method="PATCH" data-value="3">
          @endif
            <span class="glyphicon glyphicon-trash"></span>
          @if ($question->qstatus < 3)
            </a>
          @endif
        </td>
      </tr>
      @endforeach
    </table>
  </div>

@stop
