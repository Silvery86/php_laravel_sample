@extends('layout.app')

@section('content')
    <h1>This is about page</h1>
{{ $x = 1 }}
@if ($x > 2)
    <h3>x is greater than 2</h3>
@elseif($x < 10)
    <h3>x is less than 10 </h3>
@else
    <h3>All conditions does not match</h3>
@endif

{{-- unless = if not --}}
@unless (empty($name))
    <h3>Name is not empty</h3>    
@endunless

@empty($age)
    <h3>Age is empty</h3>
@endempty

@isset($name)
    <h3>Name has been set</h3>
@endisset

@switch($name)
    @case('Hoang')
        <h3>This is mr Hoang</h3>
        @break
    @case('Giang')
        <h3>This is mr Giang</h3>
        @break
    @default
    <h3>No one selected</h3>
        
@endswitch
@endsection