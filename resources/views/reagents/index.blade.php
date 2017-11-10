@extends('layouts.app')

@section('content')
    @if (count($reagents) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ __('app.currentReagent', ['s' =>'ы']) }}
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Заголовок таблицы -->
                    <thead>
                    <th>{{ __('app.reagent') }}</th>
                    <th>&nbsp;</th>
                    </thead>

                    <!-- Тело таблицы -->
                    <tbody>
                    @foreach ($reagents as $reagent)
                        <tr>
                            <td class="table-text">
                                <div>{{ $reagent->name }}</div>
                            </td>

                            <td>
                                <!-- TODO: Кнопка Удалить -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection