@extends('layout')

@section('title')Отзывы@endsection
@section('main_content')
    <main role="main" class="container">
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
        <form method="post" action="/review/check">
            @csrf
            <input type="email" name="email" id="email" placeholder="Введите Email" class="form-control"><br>
            <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
            <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form>

        <br>
        <h1>Все отзывы</h1>
        @foreach($reviews as $review)
            <div class="alert alert-light">
                <h3>{{$review->subject}}</h3>
                <b>{{$review->email}}</b>
                <p>{{$review->message}}</p>
            </div>
        @endforeach
    </main>
@endsection
