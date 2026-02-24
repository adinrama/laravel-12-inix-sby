@extends('layouts.main')

@section('page')
    About Page
@endsection

@section('content')
    <p>Name: {{ $name }}</p>
    <p>Address: {{ $address }}</p>
@endsection
