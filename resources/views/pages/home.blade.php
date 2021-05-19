@extends('layouts.main-layout')
@section('content')
<main>
<div class="jambo">
    <img src="{{ asset('/storage/images/jumbotron.jpg') }}" alt="">
</div>

<h1 class="center">{{$name}}</h1>

<ul class="center">
    @foreach ($data as $d)
        <li>
            <div class="card">
                
                <div>
                   <img src=" {{ $d['thumb'] }}" alt="">
                </div>

                <a href="{{route('comix-dettagli',$loop->index )}}">
                    {{ $d['title'] }}
                </a>
            
            </div>
            
        </li>
    @endforeach
</ul>
</main>
@endsection
