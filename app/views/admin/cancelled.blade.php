@extends('layouts.admin')

@section('content')
  <h2>Odhlášení účastníci konference</h2>

  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Jméno</th>
          <th>Příjmení</th>
          <th>Organizace</th>
          <th>E-mail</th>
          <th>Hlavní program</th>
          <th>Seminář</th>
          <th>Registrován</th>
          <th>Odhlášen</th>
        </tr>
      </thead>
      @foreach ($cancellees as $cancellee)
      <tr>
        <td>{{{ $cancellee->firstname }}}</td>
        <td>{{{ $cancellee->surname }}}</td>
        <td>{{{ $cancellee->organisation }}}</td>
        <td>{{{ $cancellee->email }}}</td>
        <td>{{{ $cancellee->hlavni_sal }}}</td>
        <td>{{{ $cancellee->seminar }}}</td>
        <td>{{ $cancellee->registered_at }}</td>
        <td>{{ $cancellee->cancelled_at }}</td>
      </tr>
      @endforeach
    </table>
  </div>
@stop
