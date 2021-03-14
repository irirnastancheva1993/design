@extends('layouts.app')

@section('title')Отзывы@endsection
@section('content')
    <div class="container">
        <h3 class="mt-5">Форма отравления отзыва</h3>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ '/review/check' }}">
            @csrf
            <input type="email" name="email" id="email" placeholder="Введите Email" class="form-control"><br>
            <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
            <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-outline-secondary">Отправить</button>
        </form>
        @if(isset($reviews))
            @if($reviews->count()>0)
                <br>
                <h1>Все отзывы</h1>
                @foreach($reviews as $review)
                    <div class="alert alert-light">
                        <h3>{{$review->subject}}</h3>
                        <b>{{$review->email}}</b>
                        <p>{{$review->message}}</p>
                    </div>
                @endforeach
                {{--{{$reviews->appends(['search' => request()->search ])->links()}}--}}
            @endif
        @endif
    </div>
@endsection
