@extends('layouts.eon_main')

@section('content')

<div class="slider">
	<div class="tp-banner-container">
		<div class="tp-banner">
				<section id="banner-video">

					<video style="" autoplay loop muted>
						<source src="videos/true.mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
					<div class="caption p-5 text-center">
						<h1 class="mb-4 display-5 fw-bold">People of Eksafar</h1>
			
						<p class="fs-5">In 2023 you will witness the rise of a magnificent tale in the history of Eksafar's Great
							Library. Our
							destination lies high on the horizon. Prepare yourself for a beautiful adventure.</p>
			
						<p class="fs-5">Expore all the events below.</p>
					</div>
			
					<a class="text-light text-center mt-5 fs-5 d-inline-block scroll-down-button" href="#upcoming">
						<i class="fa-solid fa-arrow-down-long"></i>
					</a>
			
			
					<script>
						document.querySelector("#banner-video video")?.play();
					</script>
			
					<style>
						#banner-video {
							height: 100vh;
							width: 100vw;
							position: relative
						}
			
						#banner-video video {
							object-fit: cover;
							height: 100%;
							width: 100%
						}
			
						#banner-video::after {
							content: "";
							position: absolute;
							height: 100%;
							width: 100%;
							top: 0;
							left: 0;
							background-image: linear-gradient(rgba(0, 0, 0, .1), #111);
						}
			
						#banner-video .caption {
							position: absolute;
							max-width: 700px;
							min-width: 380px;
							bottom: 150px;
							left: 50%;
							transform: translateX(-50%);
							z-index: 3;
							text-shadow: 4px 4px 0 0 rgba(0, 0, 0, 0.5);
						}
			
						#banner-video .scroll-down-button {
							position: absolute;
							bottom: 30px;
							left: 50%;
							transform: translateX(-50%) translateY(-50%);
							z-index: 3;
							width: 40px;
							border: 1px solid #fff;
							padding: 15px 10px;
							border-radius: 90px;
							animation: scroll-anim 0.8s ease-in alternate infinite;
						}
			
						@keyframes scroll-anim {
							from {
								bottom: 50px;
							}
			
							to {
								bottom: 30px;
							}
			
						}
					</style>
			
				</section>
		</div>	
	</div><!-- REVOLUTION SLIDER -->	
</div><!-- Slider -->


<section>
	<div class="block gray half-parallax blackish">
		<div style="background:url(images/resource/true.jpg);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="parallax-title">
						<h2>UPCOMING<span style="color: red;"> EVENTS</span></h2>	
						
					</div>

				<div class="remove-ext offers">
						<div class="row">
							<div class="col-md-4">
								<div class="offer">
									<div class="offer-img"><img src="images/resource/offer1.jpg" alt="" /></div>
									<div class="offer-desc">
										<div class="offer-inner">
											<h3>Wedding Planning</h3>
											
											<a href="/wedding-planning" title="">READ MORE</a>
										</div>
									</div>
								</div><!-- Offer -->
							</div>
							<div class="col-md-4">
								<div class="offer">
									<div class="offer-img"><img src="images/resource/offer2.jpg" alt="" /></div>
									<div class="offer-desc">
										<div class="offer-inner">
											<h3>Corporate Events </h3>
											
											<a href="/cor-events" title="">READ MORE</a>
										</div>
									</div>
								</div><!-- Offer -->
							</div>
							<div class="col-md-4">
								<div class="offer">
									<div class="offer-img"><img src="images/resource/offer22.jpg" alt="" /></div>
									<div class="offer-desc">
										<div class="offer-inner">
											<h3> Private Events </h3>
											
											<a href="/private-events" title="">READ MORE</a>
										</div>
									</div>
								</div><!-- Offer -->
							</div>
							
						</div>
					</div><!-- Offers -->
				</div>
			</div>
		</div>
	</div>
</section><!--Offers Section-->


<section>	
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						
						<h1>ABOUT <span>US</span></h1>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="remove-ext">
						<div class="about-video">
							<div class="about-detail">
								<h3><span>We create moments that turn into memories that you never forget.</span></h3>
								<p>Trueray Events is an event management company that specializes in creating extraordinary experiences. With a dedicated team of professionals, based in Bangalore, India. we understand that every event is unique and deserves to be executed flawlessly. Whether you are planning a corporate conference, a glamorous gala, a breathtaking wedding, or any other special occasion, our experienced professionals are here to make your visions into reality. </p>
							</div><!-- Event Details -->
							<div class="about-img">
								<img src="images/resource/upcoming-event.jpg" alt="" />
							</div><!-- Event Image -->
						</div><!-- Upcoming Event -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- Upcoming Event Section -->


@endsection