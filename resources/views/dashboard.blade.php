@extends('base')

@section('content')

<h1> This Is The Dashboard</h1>

<p>
    <strong>Welcome {{auth()->user()->name}} This is a basic implementation of authentication in Laravel</strong>
</p>

@endsection
