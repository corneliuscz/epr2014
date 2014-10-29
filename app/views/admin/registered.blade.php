@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h2>Účastníci konference</h2>
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <strong>Celkem:</strong> {{{ $attendeesCount['vsichni'] }}}
    </div>
    <div class="col-md-2">
      <strong>Hlavní program:</strong> {{{ $attendeesCount['hlavni'] }}}
    </div>
    <div class="col-md-2">
      <strong>Starostové:</strong> {{{ $attendeesCount['s1'] }}}
    </div>
    <div class="col-md-2">
      <strong>Školy:</strong> {{{ $attendeesCount['s2'] }}}
    </div>
    <div class="col-md-2">
      <strong>ITI:</strong> {{{ $attendeesCount['s3'] }}}
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h3>Přihlášení účastníci</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">

  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Jméno</th>
          <th>Příjmení</th>
          <th>Organizace</th>
          <th>E-mail</th>
          <th>Hlavní program</th>
          <th>Seminář</th>
          <th>Souhlas</th>
          <th>Registrován</th>
          <th>Aktualizován</th>
          <th colspan="2">Akce</th>
        </tr>
      </thead>
      <?php $poradi=1 ?>
      @foreach ($attendees as $attendee)
      <tr>
        <td>{{{ $poradi }}}</td>
        <td>{{{ $attendee->firstname }}}</td>
        <td>{{{ $attendee->surname }}}</td>
        <td>{{{ $attendee->organisation }}}</td>
        <td>{{{ $attendee->email }}}</td>
        <td>{{{ $attendee->hlavni_sal }}}</td>
        <td>{{{ $attendee->seminar }}}</td>
        <td>{{{ $attendee->terms }}}</td>
        <td>{{ $attendee->created_at }}</td>
        <td>{{ $attendee->updated_at }}</td>
        <td>
          <a href="{{ URL::route('attendees.edit', $attendee->id) }}" title="Upravit účastníka"><span class="glyphicon glyphicon-pencil"></span></a>
        </td>
        <td>
          <a href="{{ URL::route('attendees.destroy', $attendee->id) }}" title="Odstranit účastníka" data-method="delete"><span class="glyphicon glyphicon-remove"></span></a>
        </td>
      </tr>
        <?php $poradi++ ?>
      @endforeach
    </table>
  </div>

    </div>
  </div>
@stop
