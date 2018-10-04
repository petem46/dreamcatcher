@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
      <div class="display-1">
          students.index
      </div>

      <table class="table table-striped">
      <thead>
      <th>Forename</th>
      <th>Surname</th>
      <th>Year</th>
      <th>Reg</th>
      <th></th>
    </thead>
    <tbody>
    @foreach ($students as $student)
        <tr>
            <td>
                {{ $student->forename }}
            </td>
            <td>
                {{ $student->surname }}
            </td>
            <td>
                {{ $student->year }}
            </td>
            <td>
                {{ $student->reg }}
            </td>
            <td>
                <a href="{{ action('StudentController@show', $student->id) }}" class="btn btn-primary">View Profile</a>
                <a href="{{ action('AmbitionController@index') }}" class="btn btn-primary">Ambition Index</a>

            </td>
        </tr>
        {{-- @foreach ($student->results as $result)
        <tr>
            <td>{{$result->name}}</td>
            @if ($result->resultset == 'Y7 DC1')
                <td>{{$result->result}}</td>
            @else
            <td></td>
            @endif
            @if ($result->resultset == 'Y7 DC2')
            <td>{{$result->result}}</td>
            @else
            <td></td>
            @endif
            @if ($result->resultset == 'Y7 DC3')
            <td>{{$result->result}}</td>
            @else
            <td></td>
            @endif
            </tr>
        @endforeach --}}

        @endforeach
    </tbody>
    </table>

@endsection
