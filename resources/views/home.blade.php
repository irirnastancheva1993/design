@extends('layouts.app')
@section('title')
Главная страница
@endsection
@section('content')
<div class="container marketing mt-3">
    @if(isset($generics))
        <div class="row">
            @foreach($generics as $generic)
                <div class="col-lg-4">
                    <img class="rounded mx-auto d-block" src="{{ asset('img/' . $generic->short_name . '_clothes.jpg') }}" alt="" width="160" height="160">
                    <a class="btn btn-block btn-outline-secondary my-3" href="/{{ $generic->name_eng }}_home" role="button" >{{ $generic->name_ru }}</a>
                </div>
            @endforeach
        </div>
@endif
@endsection
