@extends('layout')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">@lang('home.create_task')</h4>
        </div>
        <div class="float-end">
            <a href="{{ route('index') }}" class="btn btn-info">
                <i class="fa fa-arrow-left"></i>@lang('home.all_task')
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="card card-body bg-light p-4">
        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">@lang('home.title')</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">@lang('home.description')</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
            </div>

            <a href="{{ route('index') }}" class="btn btn-secondary mr-2"><i class="fa fa-arrow-left"></i> @lang('home.cancel')</a>

            <button type="submit" class="btn btn-success">
                <i class="fa fa-check"></i>
                @lang('home.save')
            </button>
        </form>
    </div>

@endsection
