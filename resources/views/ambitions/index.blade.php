@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
      <div class="display-1">
          ambitions.index
      </div>

      <table class="table table-striped">
      <thead>
      <th>id</th>
      <th>introduction</th>
      <th>experience</th>
      <th>proud_of</th>
      <th></th>
    </thead>
    <tbody>
    @foreach ($ambitions as $ambition)
        <tr>
            <td>
                {{ $ambition->id }}
            </td>
            <td>
                {{ $ambition->introduction }}
            </td>
            <td>
                {{ $ambition->experience }}
            </td>
            <td>
                {{ $ambition->proud_of }}
            </td>
            <td>
                <a href="{{ action('AmbitionController@show', $ambition->id) }}" class="btn btn-primary">View Profile</a>
            </td>
        </tr>
        {{-- @foreach ($ambition->results as $result)
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
