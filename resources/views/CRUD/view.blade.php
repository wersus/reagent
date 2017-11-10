@extends('layouts.app')
@section('content')
    @include('common.errors')
    <div class="jumbotron text-center">
    @foreach($fields as $field)
        <p>{{__('app.'.$field)}}:{{ $field }}</p>
    @endforeach
    </div>
@endsection