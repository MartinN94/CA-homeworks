@extends('layout')
@section('full-card')

<section>
    <div class="box" style="height: 720px">
    <form action="/card/{{ $card->id }}" method="post">
        @method('delete')
        @csrf
        <img src="/images/{{ $card->img }}" alt="" style="width: 50%">
        <br>
        <br>
        <h1 style="font-size: 40px">{{ $card->title }}</h1>
        <br>
        <br>
        <p>{{ $card->body }}</p>
        <a href="/{{ $card->id }}/edit" class="button small">Edit Card</a>
        <button style="background-color: red" type="submit" name="delete" value="delete">Delete</button>
        </form>

    </div>
</section>

@endsection