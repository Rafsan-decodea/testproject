
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
          <option value="" disabled>Select customer status</option>
          <option value="1">Active</option>
          <option value="0">Inactive<option>

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
     <h3>active customer</h3>
@foreach($activecustomers as $item)
    id==> {{ $item->id }} <br> 
     Name==> {{ $item->Name }}({{ $item->email }})  <br>
   roll==> {{ $item->Roll }} <br>
    Clas==>{{ $item->Class }}<br>
    Email==>{{ $item->email }}<br>
    
@endforeach
   </div></div>
<br>

<div class="row">
    <div class="col-6">
      <h3>active customer</h3>
 @foreach($inactivecustomres as $item)
     id==> {{ $item->id }} <br> 
      Name==> {{ $item->Name }}({{ $item->email }})  <br>
    roll==> {{ $item->Roll }} <br>
     Clas==>{{ $item->Class }}<br>
     Email==>{{ $item->email }}<br>
     
 @endforeach
    </div></div>





@endsection
