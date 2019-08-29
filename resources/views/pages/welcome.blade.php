
@extends('layout')
@section('title')
    View Post
    
@endsection


@section('content')

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
          Status==>{{ $item->active ? 'active' : 'inactive' }}<br>
          <a href="{{ route('edit') }}">Edit</a>
          
      @endforeach
   </div>
   <div class="col-6 ">
    <h3>inactive Student</h3>
      @foreach($inactivecustomres as $item)
      
        id==> {{ $item->id }} <br> 
          Name==> {{ $item->Name }}({{ $item->email }})  <br>
          Name==> {{ $item->company->name }}
          <br>
        roll==> {{ $item->Roll }} <br>
        Clas==>{{ $item->Class }}<br>
        Email==>{{ $item->email }}<br>
        Status==>{{ $item->active ? 'inactive' : 'active' }}<br>
        <a href="{{ route('edit') }}">Edit</a>
      @endforeach
  </div>


  </div>
<br>






@endsection
