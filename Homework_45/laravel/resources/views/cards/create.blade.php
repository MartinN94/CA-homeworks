@extends('layout')

@section('create')



<div id="footer" class="wrapper style2">
    <div class="container">
        <section>
            <header class="major">
                <h2>Create Card</h2>
            </header>
        <form method="POST" action="/">
                @csrf

                <div class="row half">
                    <div class="12u">
                        <input class="text" type="text" name="title" id="title" placeholder="Card Title" />
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <input class="text" type="text" name="img" id="img" placeholder="Card Image" />
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="intro" id="intro" placeholder="Card Intro"></textarea>
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <textarea name="body" id="body" placeholder="Card Body"></textarea>
                    </div>
                </div>
                <div class="row half">
                    <div class="12u">
                        <ul class="actions">
                            <li>
                                <input type="submit" value="Store" class="button alt" />
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>

@endsection