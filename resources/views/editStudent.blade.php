@extends('master')
@section('title')

  Edit Student

@endsection

@section('content')

<form class="form-horizontal" action="{{ route('updateStudent',$student->id) }}"  method="post">

{{   csrf_field() }}

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" value="{{ $student->name  }}" placeholder="{{ $student->name  }}">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="registrationID">Registration No:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="registrationID" id="registrationID" value="{{ $student->registration_id  }}" placeholder="Enter registrationID">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="department" id="department" value="{{ $student->department_name  }}" placeholder="Enter department Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="info">Information:</label>
    <div class="col-sm-10">
    <textarea type="text" class="form-control" name="info" id="info" rows="10">
{{ $student->info  }}
     </textarea>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

      <button class="btn btn-primary"type="submit" class="btn btn-default">Edit  Student</button>
    </div>
  </div>
</form>



@endsection
