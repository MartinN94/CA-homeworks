@extends('layout')
@section('full-card')

<section>
    <div class="box" style="height: 720px">
        <img src="/images/{{ $card->img }}" alt="" style="width: 50%">
        <br>
        <br>
        <h1 style="font-size: 40px">{{ $card->title }}</h1>
        <br>
        <br>
        <p>{{ $card->body }}</p>
    </div>
</section>

@endsection