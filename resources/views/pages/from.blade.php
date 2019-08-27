@extends('layout')
@section('title')
    Add post
    
@endsection

@section('content')
    
<form action="{{ route('add.student') }}" method="POST"  class="pb-5">
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

@endsection