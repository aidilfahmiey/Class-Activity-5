@extends('base')
@section('main')
<div class="row">

<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success text-center">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="col-sm-12">
<br />
<h3 class="display-5 text-center">Student List</h3>    
  <table class="table table-striped">
    <thead>
        <tr>
          <th>No</th>
          <th>Matric Number</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Date of Birth</th>
          <th>Citizenship</th>
          <th>Status</th>
          <th>Religion</th>
          <th>Activeness</th>
          <th>Current Years</th>
          <th>ID Number</th>
          <th>Email</th>
          <th colspan="2" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $count => $student)
        <tr>
            <td>{{++$count}}</td>
            <td><a href="{{ route('students.show',$student->id)}}">{{$student->matricnum}} {{$student->name}}
              {{$student->gender}} {{$student->dob}} {{$student->citizenship}} {{$student->religion}} {{$student->active}}
              {{$student->years}} {{$student->ic}} {{$student->email}}</a></td>

            <td class="text-center">
                <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary btn-block">Edit</a>
            </td>
            <td class="text-center">
                <form action="{{ route('students.destroy', $student->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-block" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a style="margin: 19px;" href="{{ route('students.create')}}" class="btn btn-primary">New Student Details</a>
  </div>
<div>

</div>
@endsection
