
@extends('layout')
@section('title')
    View Post
    
@endsection


@section('content')

<form action="{{ route('add.company') }}" method="POST"  class="pb-5">
    <div class="input-group">
      Name: <input type="text" name="name" />
       </div>
      <div class="input-group">
     Phone:  <input type="number" name="phone" />
       </div>
       
      
 

      @foreach ($errors->all() as $item)
      {{ $item }}<br>
      @endforeach 
    
<button type="submit" class="btn btn-primary">Add company</button>
@csrf
</form>


@foreach ($company_data as $item)
    {{ $item->name }}
    {{ $item->phone }}
@endforeach





@endsection
