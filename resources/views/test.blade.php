@extends('layouts.main')

@section('contents')
   name is {{$name}} <br/>
   my page is {{$page}} <br/>
   {{--my page is {{$count}} <br/> --}}
   @foreach ($users as $user)
      users {{$user}} <br>
   @endforeach
@endsection
   
