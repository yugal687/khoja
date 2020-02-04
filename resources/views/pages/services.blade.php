@extends('layouts.app')
@section('content')

<h1>Services</h1>
        @if(count($services) >0)
        <ul class="list-group">
      @foreach($services as $service)
        </ul>
<li class="list-group-item">{{ $service }}</li>
      @endforeach
        @endif
    @endsection
