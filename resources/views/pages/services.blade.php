@extends('layouts.app')

@section('content')
    <h1>This is {{$title}} page</h1>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $curr_service)
                <li class="list-group-item">{{$curr_service}}</li>    
            @endforeach
        </ul>
    @endif
@endsection
     