@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $model->label_upper}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route($model->modelTitle.'.create') }}"> {{ __('app.Create New') }} {{ $model->label }}</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>{{__('app.Number')}}</th>
            @foreach($fields as $attribute)
                <th>{{ $attribute }}</th>
            @endforeach
            <th>{{ __('app.Action') }}</th>
        </tr> @php $i = 0; @endphp
        @foreach ($models as $key => $item)
            <tr>
                <td>{{ ++$i }}</td>
                @foreach($fields as $attribute)
                    <td>{{ $item->$attribute }}</td>
                @endforeach
                <td>
                    <a class="btn btn-info" href="{{ route($model->modelTitle.'.show',$item->id) }}">{{ __('app.Show') }}</a>
                    <a class="btn btn-primary" href="{{ route($model->modelTitle.'.edit',$item->id) }}">{{ __('app.Edit') }}</a>
                    {!! Form::open(['method' => 'DELETE','route' => [$model->modelTitle.'.destroy', $item->id],'style'=>'display:inline']) !!}
                    {!! Form::submit(__('app.Delete'), ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection