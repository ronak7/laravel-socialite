@extends('employee::layouts.master')

@section('content')
    <h1>Hello World</h1>

    @foreach (data as $item)
        {{$item}}
    @endforeach
    </h1>
    <p>
        This view is loaded from module: {!! config('employee.name') !!}
    </p>
@stop
