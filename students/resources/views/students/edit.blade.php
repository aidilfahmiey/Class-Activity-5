@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <br />
        <h3 class="display-5 text-center">Update Student Details</h3>
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
        <form method="post" action="{{ route('students.update', $students->id) }}">
            @method('PATCH') 
            @csrf
            <div style="width: 25%;margin: auto;display: block;">
                <div class="form-group">
                  <label for="matricnumber">Matric Number</label>
                  <input type="number" class="form-control" id="matricnum" name="matricnum" placeholder="Enter matric number" size="10"
                  value="{{ $students->matricnum }}">
                </div>
              </div>
    
             <div style="width: 25%;margin: auto;display: block;">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                    value="{{ $students->name }}">
                </div>
            </div>
    
            <div style="width: 25%;margin: auto;display: block;">
                <div class="form-group">
                    <label for="gender">Select Your Gender</label>
                    <select class="form-control" id="gender" name="gender" value="{{ $students->gender }}">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
            </div>
    
          <div style="width: 25%;margin: auto;display: block;">
          <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{ $students->dob }}">
          </div>
        </div>
    
          <div style="width: 25%;margin: auto;display: block;">
          <div class="form-group">
            <label for="citizenship">Citizenship</label>
            <input type="text" class="form-control" id="citizenship" name="citizenship" placeholder="Citizenship"
            value="{{ $students->citizenship }}">
          </div>
        </div>
    
        <div style="width: 25%;margin: auto;display: block;">
            <fieldset class="form-group">
              <label for="status">Status</label>
              <div class="form-check">
                  
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="status" id="status" value="Single" checked=""
                  value="{{ $students->status }}">
                  Single
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="status" id="status" value="Married"
                  value="{{ $students->status }}">
                  Married
                </label>
              </div>
            </fieldset>
          </div>
    
        <div style="width: 25%;margin: auto;display: block;">
            <div class="form-group">
              <label for="religion">Religion</label>
              <select class="form-control" id="religion" name="religion" value="{{ $students->religion }}">
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Christian">Christian</option>
              </select>
            </div>
          </div>
    
          <div style="width: 25%;margin: auto;display: block;">
            <fieldset class="form-group">
              <label for="active">Activeness</label>
              <div class="form-check">
                  
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" id="active" value="active" checked=""
                  value="{{ $students->active }}">
                  Active
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="active" id="active" value="not active"
                  value="{{ $students->active }}">
                  Not active
                </label>
              </div>
            </fieldset>
          </div>
    
          <div style="width: 25%;margin: auto;display: block;">
          <div class="form-group">
            <label for="years">Current Year</label>
            <input type="text" class="form-control" id="years" name="years" placeholder="First year"
            value="{{ $students->years }}">
          </div>
        </div>
    
        <div style="width: 25%;margin: auto;display: block;">
            <div class="form-group">
              <label for="ic">ID Number</label>
              <input type="number" class="form-control" id="ic" name="ic" placeholder="Enter ID number"
              value="{{ $students->ic }}">
            </div>
          </div>
    
          <div style="width: 25%;margin: auto;display: block;">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email"
            value="{{ $students->email }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
        </div>

            <div class="text-center">
            <a href="{{ route('students.index')}}" class="btn btn-primary">Return</a>&nbsp;&nbsp;    
            <button type="submit" class="btn btn-primary">Update Details</button>
            </div>
        </form>
    </div>
</div>
@endsection