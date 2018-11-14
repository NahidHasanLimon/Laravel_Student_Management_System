@extends('master')
@section('title')

  Student List

@endsection

@section('content')

<table class="table table-responsive table-hover">
  <tr>
    <th>Serial</th>
    <th>ID</th>
      <th>Name</th>
        <th>Reg.ID</th>
          <th>Department</th>
            <th>Info</th>
              <th>Action</th>
  </tr>
  @php $i = 1; @endphp

  @foreach($students as $students)


  <tr>
    <td>{{ $i }}</td>
    <td>{{ $students->id }}</td>
    <td>{{ $students->name }}</td>
    <td>{{ $students->registation_id  }}</td>
    <td>{{ $students->department_name }}</td>
    <td>{{ $students->info }}</td>
    <td>
      <a href="{{  route('editStudent',$students->id)  }}" class="btn btn-info">Edit</a>
      <form class="form-inline" action="{{  route('deleteStudent',$students->id)  }}" method="post">
        {{   csrf_field() }}
        <input  class="btn btn-danger" type="submit"  value="Delete">

      </form>
    </td>
  </tr>
  @php $i++; @endphp

    @endforeach

</table>


@endsection
