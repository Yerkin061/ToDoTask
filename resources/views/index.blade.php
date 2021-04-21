@extends('layout')

@section('main-content')
    <div>
        <div class="float-start">
            <h4 class="pb-3">@lang('home.my_tasks')</h4>
        </div>
        <div class="float-end">
            <a href="{{ route('task.create') }}" class="btn btn-info">
               <i class="fa fa-plus-circle"></i> @lang('home.create_task')
            </a>
        </div>
        <div class="clearfix"></div>
    </div>

    @foreach ($tasks as $task)
        <div class="card mt-3">
            <h5 class="card-header">
                @if ($task->status === 'Todo')
                    {{ $task->title }}
                @else
                    <del>{{ $task->title }}</del>
                @endif
            </h5>

            <div class="card-body">
                <div class="card-text">
                    <div class="float-start">
                        @if ($task->status === 'Todo')
                            {{ $task->description }}
                        @else-->
                            <del>{{ $task->description }}</del>
                       @endif
                        <br>

                        <form action="{{ route('task.destroy', $task->id) }}" style="display: inline" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @endforeach

    @if (count($tasks) === 0)
        <div class="alert alert-danger p-2">
            @lang('home.info')
        </div>
    @endif

@endsection
