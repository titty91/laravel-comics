@extends('layouts.main-layout')
@section('content')
<main >
<div>
    <img src="{{ asset('/storage/images/jumbotron.jpg') }}" alt="">
</div>

<h1 class="center">{{$name}}</h1>

<ul class="center">
    @foreach ($data as $d)
        <li>
            <div>
                <a href="{{route('comix-dettagli',$loop->index )}}">
                    {{ $d['title'] }}
                </a>

                <div>
                   <img src=" {{ $d['thumb'] }}" alt="">
                </div>
            
            </div>
            
        </li>
    @endforeach
</ul>
</main>
@endsection
