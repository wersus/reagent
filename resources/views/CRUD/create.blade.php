@extends('layouts.app')

@section('content')

    @include('common.errors')

    {{ Form::open(array('url' => $model->modelTitle)) }}

    @foreach($fields as $type => $field)
        <div class="form-group">
            {{ Form::label(__($model->modelTitle.'.'.$field))}}
            @switch($type)
                @case('checkbox')
                {{ Form::checkbox($field) }}
                @break

                @default
                {{ Form::text($field, null, ['class' => 'form-control']) }}
            @endswitch
        </div>
    @endforeach

    {{ Form::submit(__('app.Create'), array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection