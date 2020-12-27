@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Student Details</h3>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
            <div class="form-group">
                <label for="matricnum">Matric Number</label>
                <input type="number" class="form-control" name="matricnum" value="{{ $student->matricnum }}" readonly>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $student->name }}" readonly>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" name="gender" value="{{ $student->gender }}" readonly>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" value="{{ $student->dob }}" readonly>
            </div>
            <div class="form-group">
                <label for="citizenship">Citizenship</label>
                <input type="text" class="form-control" name="citizenship" value="{{ $student->citizenship }}" readonly>
            </div>
            <div class="form-group">
                <label for="religion">Religion</label>
                <input type="text" class="form-control" name="religion" value="{{ $student->religion }}" readonly>
            </div>
            <div class="form-group">
                <label for="active">Activeness</label>
                <input type="text" class="form-control" name="active" value="{{ $student->active }}" readonly>
            </div>
            <div class="form-group">
                <label for="years">Current Years</label>
                <input type="text" class="form-control" name="years" value="{{ $student->years }}" readonly>
            </div>
            <div class="form-group">
                <label for="ic">ID Number</label>
                <input type="number" class="form-control" name="ic" value="{{ $student->ic }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $student->email }}" readonly>
            </div>


            </form>

            <div class="text-center">
            <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            </div>
    </div>
</div>
@endsection