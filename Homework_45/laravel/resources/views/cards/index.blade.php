@extends('layout')
@section('cards')
    				<!-- Banner -->
					<div id="banner" class="container">
						<section>
							<p>This is <strong>Phase Shift</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p>
							<a href="/create" class="button medium">Create Card</a>
						</section>
					</div>

				<!-- Extra -->
					<div id="extra">
						<div class="container">
							<div class="row no-collapse-1">
								@foreach ($cards as $card)
							<section class="4u" style="margin-bottom: 20px"> <a href="#" class="image featured"><img src="images/{{ $card->img }}" alt=""></a>
									<div class="box" style="height: 400px">
									<h2>{{ $card->title }}</h2>
									<br>
									<p>{{ $card->intro }}</p>
									<a href="/card/{{ $card->id }}" class="button">Read More</a> </div>
								</section>
								@endforeach
							</div>
						</div>
					</div>
@endsection


