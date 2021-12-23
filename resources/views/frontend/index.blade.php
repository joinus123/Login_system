@extends('frontend.master')
@section('section')
<section class="index-banner">
	<div class="container">
		<div class="text-box" data-aos="zoom-in" data-aos-duration="1000">
			<p class="tagline">Help the Poor in Need</p>
			<h1 class="heading">Lend the <br>Helping Hand Get Involved</h1>
			<a href="#!" class="donate-btn purple-btn btn-hover">Donate Now</a>
		</div>
	</div>
	<div class="index-abs-wrap" data-aos="zoom-in" data-aos-duration="1200">
		<div class="abs-img-1 abs-img">
			<img src="{{asset('frontend/images/index-banner-abs-1.png')}}" alt="img" class="img-fluid">
		</div>
		<div class="abs-img-2 abs-img">
			<img src="{{asset('frontend/images/index-banner-abs-2.png')}}" alt="img" class="img-fluid">
		</div>
	</div>
</section>
@endsection