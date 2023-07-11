@extends('layouts.main')

@section('content')
<section>
	<div class="block gray half-parallax blackish remove-bottom">
		<div style="background:url(images/parallax8.jpg);" class="parallax"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="page-title">
						
						<h1>OUR <span>GALLERY</span></h1>
						
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
					<div class="controls">	
						<ul>
							<li class="filter" data-filter="all">All</li>
							<li class="filter" data-filter="category_1">Wedding planning </li>
							<li class="filter" data-filter="category_2">Corporate Events </li>
							<li class="filter" data-filter="category_3">Private Events </li>
							
						</ul>
					</div>
					<div class="row">
						<ul id="Grid">
							<li class="mix category_1 col-md-4">
								<div class="portfolio">
									<img src="images/resource/snap-4col-1.jpg" alt="" />
									<div class="hover">
										<h3>Bridal Makup</h3>
										
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
							</li>
							<li class="mix category_2 col-md-4">
								<div class="portfolio">
									<img src="images/resource/snap-4col-2.jpg" alt="" />
									<div class="hover">
										<h3>Product Launch</h3>
										
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
							</li>
							<li class="mix category_1 col-md-4">
								<div class="portfolio">
									<img src="images/resource/snap-4col-3.jpg" alt="" />
									<div class="hover">
										<h3>Pre Wedding Shoots</h3>
										
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
							</li>
							<li class="mix category_3 col-md-4">
								<div class="portfolio">
									<img src="images/resource/snap-4col-4.jpg" alt="" />
									<div class="hover">
										<h3>New Year Party</h3>
										
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
							</li>
							<li class="mix category_3 col-md-4">
								<div class="portfolio">
									<img src="images/resource/snap-4col-5.jpg" alt="" />
									<div class="hover">
										<h3>Anniversary Parties</h3>
										
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
							</li>
							<li class="mix category_2 col-md-4">
								<div class="portfolio">
									<img src="images/resource/snap-4col-6.jpg" alt="" />
									<div class="hover">
										<h3>Conference</h3>
										
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
							</li>
							<li class="mix category_2 col-md-4">
								<div class="portfolio">
									<img src="images/resource/snap-4col-7.jpg" alt="" />
									<div class="hover">
										<h3>Seminar</h3>
										
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
							</li>
							<li class="mix category_2 col-md-4">
								<div class="portfolio">
									<img src="images/resource/snap-4col-8.jpg" alt="" />
									<div class="hover">
										<h3>Galas/Dinners</h3>
										
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
							</li>
							<li class="mix category_2 col-md-4">
								<div class="portfolio">
									<img src="images/resource/snap-4col-9.jpg" alt="" />
									<div class="hover">
										<h3>Exhibition</h3>
										
										<a data-rel="prettyPhoto" href="http://placehold.it/1000x800" title=""><img src="images/zoom.png" alt="" /></a>
									</div>
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

@endsection