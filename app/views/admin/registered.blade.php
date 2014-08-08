@extends('layouts.admin')

@section('content')
  <h2>Účastníci konference</h2>

  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Jméno</th>
          <th>Příjmení</th>
          <th>Organizace</th>
          <th>E-mail</th>
          <th>Souhlas</th>
          <th>Registrován</th>
          <th>Aktualizován</th>
          <th>Akce</th>
        </tr>
      </thead>
      @foreach ($attendees as $attendee)
      <tr>
        <td>{{{ $attendee->firstname }}}</td>
        <td>{{{ $attendee->surname }}}</td>
        <td>{{{ $attendee->organisation }}}</td>
        <td>{{{ $attendee->email }}}</td>
        <td>{{{ $attendee->terms }}}</td>
        <td>{{ $attendee->created_at }}</td>
        <td>{{ $attendee->updated_at }}</td>
        <td>
          <a href="{{ URL::route('attendees.edit', $attendee->id) }}" title="Upravit účastníka"><span class="glyphicon glyphicon-pencil"></span></a>
          <a href="{{ URL::route('attendees.destroy', $attendee->id) }}" title="Odstranit účastníka" data-method="delete"><span class="glyphicon glyphicon-remove"></span></a>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
@stop
