@extends('layouts.main-layout')
@section('content')
<div>
    <img src="{{ asset('/storage/assets/jumbotron.jpg') }}" alt="">
</div>

<h1>{{$name}}</h1>

<ul>
    @foreach ($data as $d)
        <li>
            <div>
                <a href="{{route('comix-dettagli')}}">
                    {{ $d['title'] }}
                </a>

                <div>
                   <img src=" {{ $d['thumb'] }}" alt="">
                </div>
            
            </div>
            
        </li>
    @endforeach
</ul>
@endsection
