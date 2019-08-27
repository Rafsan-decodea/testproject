
@extends('layout')
@section('title')
    View Post
    
@endsection


@section('content')

<form action="post" method="POST"  class="pb-5">
    <div class="input-group">
      Name: <input type="text" name="name" />
       </div>
      <div class="input-group">
     Roll:  <input type="text" name="roll" />
       </div>
       <div class="input-group">
        Class: <input type="text" name="class">   
       </div>
       <div class="input-group">
       Email <input type="text" name="email">   
       </div>
      <div class="form-group">
        <label for="active">status</label>
        <select name="active" id="active" class="form-control" >
          <option value="" disabled>Select Student status</option>
          <option value="1">Active</option>
          <option value="0">Inactive<option>

        </select>
      </div>
      <div class="form-group">
        <label for="active">status</label>
        <select name="active" id="active" class="form-control" >
          @foreach ($company as $item)
              <option value="{{ $item->id }}">{{  $item->name }}</option>
          @endforeach
        </select>
      </div>
 

      @foreach ($errors->all() as $item)
      {{ $item }}<br>
      @endforeach 
       
<button type="submit" class="btn btn-primary">Add item</button>
@csrf
</form>
<hr>
<div class="row">
   <div class="col-6">
     <h3>active Student</h3>
@foreach($activecustomers as $item)
    id==> {{ $item->id }} <br> 
     Name==> {{ $item->Name }}({{ $item->email }})  <br>
     Name==> {{ $item->company->name }}({{ $item->email }})  <br>
   roll==> {{ $item->Roll }} <br>
    Clas==>{{ $item->Class }}<br>
    Email==>{{ $item->email }}<br>
    Status==>{{ $item->active ? 'active' : 'inactive' }}
    
@endforeach
   </div></div>
<br>

<div class="row" >
    <div class="col-6  float-right">
      <h3>inactive Student</h3>
 @foreach($inactivecustomres as $item)
     id==> {{ $item->id }} <br> 
      Name==> {{ $item->Name }}({{ $item->email }})  <br>
      Name==> {{ $item->company->name }}({{ $item->email }})  <br>
    roll==> {{ $item->Roll }} <br>
     Clas==>{{ $item->Class }}<br>
     Email==>{{ $item->email }}<br>
     
 @endforeach
    </div></div>





@endsection
