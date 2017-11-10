@extends('layouts.app')

@section('content')

    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма новой задачи -->
        <form action="{{ url('reagent') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Имя задачи -->
            <div class="form-group">
                <label for="reagent" class="col-sm-3 control-label">Reagent</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="reagent-name" class="form-control">
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить reagent
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection