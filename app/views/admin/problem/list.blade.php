@extends('admin/admin')

@section('content')

<h2 class="ui dividing header">Problems</h2>

<div class="twelve wide column">
  <table class="ui table segment">
    <thead>
      <tr><th>Name</th>
      <th>Status</th>
      <th>Replys</th>
      <th>Delete</th>
    </tr></thead>
    <tbody>

      @foreach (Problem::all() as $problem)
      <tr>
        <td><a href="{{URL::to('adminProblem/update/'.$problem->id)}}">{{$problem->dsTitle}}</a></td>
        <td>{{$problem->created_at}}</td>
        <td>{{$problem->updated_at}}</td>
        <td><a href="{{URL::to('adminProblem/delete/'.$problem->id)}}"><i class="remove link icon"></i></a></td>
      </tr>
      @endforeach

    </tbody>
    <tfoot>
      <tr>
        <th>
          <a href="{{URL::to('adminProblem/create')}}"> <div class="ui blue labeled icon button"><i class="tint icon"></i> Add Problem</div></a>
        </th>
      </tr>
    </tfoot>
  </table>
</div>

@stop