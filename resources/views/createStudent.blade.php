@extends('master')

@section('title')

  Add|Create Student

@endsection

@section('content')

<form class="form-horizontal" action="{{ route('storeStudent') }}"  method="post" data-parsley-validate>
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

{{   csrf_field() }}

  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Student Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="registrationID">Registration No:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="registrationID" id="registrationID" placeholder="Enter registrationID" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="department">Department:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="department" id="department" placeholder="Enter department Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="info">Information:</label>
    <div class="col-sm-10">
    <textarea type="text" class="form-control" name="info" id="info" rows="10"> </textarea>
    </div>
  </div>


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Add Student</button>
    </div>
  </div>
</form>



@endsection
