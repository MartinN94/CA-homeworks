@extends('layout')

@section('head')
<head>
    <title>Phase Shift by TEMPLATED</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.dropotron.min.js"></script>
    <script src="../js/skel.min.js"></script>
    <script src="../js/skel-layers.min.js"></script>
    <script src="../js/init.js"></script>
    <link rel="stylesheet" href="../css/skel.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style-wide.css" />
</head>
@endsection



@section('update')
<div id="footer" class="wrapper style2">
    <div class="container">
        <section>
            <header class="major">
                <h2>Create Card</h2>
            </header>
        <form method="POST" action="/card/{{ $card->id }}">
                @method('PUT')
                @csrf

                <div class="row half">
                    <div class="12u">
                        <input class="text" type="text" name="title" id="title" value={{ $card->title }} />
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <input class="text" type="text" name="img" id="img" value={{ $card->img }} />
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="intro" id="intro" >{{ $card->intro }}</textarea>
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="body" id="body" >{{ $card->body }}</textarea>
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <ul class="actions">
                            <li>
                                <input type="submit" value="Edit Card" class="button alt" />
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection