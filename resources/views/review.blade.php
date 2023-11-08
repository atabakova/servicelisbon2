@extends('layout')

@section('main_title')
Reviews
@endsection

@section('main_content')
<h1>Feedback form</h1>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="/review/check">
    @csrf
<input type="email" name="email" id="email" placeholder="Type 
your e-mail" class="form-control"><br>
<input type="text" name="subject" id="subject" placeholder="Type the subject" class="form-control"><br>
<textarea name="message" id="message" class="form-control" 
placeholder="Type your review about our job!"></textarea><br>
<button type="submit" class="btn btn-success">Send!</button>

</form>
<br><Br>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h6 class="border-bottom pb-2 mb-0">All reviews</h6>
    @foreach($reviews as $el)
    <div class="d-flex text-body-secondary pt-3">
    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" role="img" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="grey" class="bi bi-person-square" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
</svg>

      <p class="pb-3 mb-0 small lh-sm border-bottom">
        <strong class="d-block text-gray-dark">{{$el->email}}</strong>
        {{$el->message}}
      </p>
    </div>
    @endforeach 


    
  </div>




@endsection