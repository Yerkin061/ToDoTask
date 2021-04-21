@extends('layout')

@section('main-content')
    <form action="{{route('email/send')}}" method="POST" enctype="multipart/form-data">
    
    @csrf

    <input type="email" name="nama">
    <input type="file" name="image">
    <br>    
    <button type="submit" class="btn btn-success">@lang('home.send')</button>
    </form>

@endsection

