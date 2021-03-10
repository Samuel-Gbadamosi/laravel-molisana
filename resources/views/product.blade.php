@extends('layouts.app')

@section('content')
<div class="container">
 <div class="card-container">
   @foreach($formati as $formato)

   <div class="card">
     <img src="{{$formato['src']}}" alt="">

   </div>
   <div class="overlay">
<a href="#"> {{$formato['titolo']}}
</a>   </div>
   @endforeach


 </div>
</div>


 @endsection
