@extends('layout')
@section('title')
    Edit Post
    
@endsection

@section('content')

<form action="{{ route('add.student') }}" method="POST"  class="pb-5">
    <div class="input-group">
      Name: <input type="text" name="name" value="{{ $student->Name }}" />
       </div>
      <div class="input-group">
     Roll:  <input type="text" name="roll" value="{{ $student->Roll }}" />
       </div>
       <div class="input-group">
        Class: <input type="text" name="class" value="{{ $student->Class }}">   
       </div>
       <div class="input-group">
       Email <input type="text" name="email" value="{{ $student->email }}">   
       </div>
      <div class="form-group">
        <label for="active">status</label>
        <select name="active"  id="active"class="form-control" >
          <option value="" disabled>Select Student status</option>
          <option value="1" {{ $student->active == 1 ? 'active':'' }}>Active</option>
          <option value="0" {{ $student->active == 0 ? 'active':'' }}>Inactive<option>
        </select>
      </div>
      <div class="form-group">
        <label for="active">status</label>
        <select name="company" id="active" class="form-control" >
          @foreach ($companies as $item)
              <option {{ $item->id == $student->id ? 'selected':''  }} value="{{ $item->id }}">{{  $item->name }}</option>
          @endforeach
        </select>
      </div>
 

      @foreach ($errors->all() as $item)
      {{ $item }}<br>
      @endforeach 
       
<button type="submit" class="btn btn-success">Edit item</button>
@csrf
</form>


@endsection