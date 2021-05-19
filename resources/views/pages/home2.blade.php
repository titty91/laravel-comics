@extends('layouts.main-layout')

@section('content')
{{ $comic ['title'] }}


<div>
<img src=" {{ $comic['thumb'] }}" alt=""> 
 </div>
@endsection