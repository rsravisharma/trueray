@extends('layouts.main')

@section('content')

<div class="slider">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="fadetotopfadefrombottom" data-slotamount="10" data-masterspeed="1000">
                    <img src="images/resource/slider.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfb slide-title" data-x="center" data-y="450" data-speed="500" data-start="4000" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:20px; padding:30px 70px;">We create moments that <strong> turn into memories</strong> that you never forget.</div>

                </li><!-- Slide 1-->

                <li data-transition="zoomout" data-slotamount="10" data-masterspeed="1000">
                    <img src="images/resource/slider2.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
                    <div class="tp-caption lft slider-icon" data-x="center" data-y="300" data-speed="2000" data-start="2000" data-easing="Back.easeOut" data-captionhidden="on" style=""><img src="images/crazy-icon.png" alt="" /></div>
                    <div class="tp-caption sfb slide-title2" data-x="center" data-y="440" data-speed="500" data-start="4000" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:20px;">We create moments that <strong>turn into memories</strong> that you never forget.</div>
                </li>
                <li data-transition="zoomout" data-slotamount="10" data-masterspeed="1000">
                    <img src="images/resource/true.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />
                    <div class="tp-caption lft slider-icon" data-x="center" data-y="250" data-speed="2000" data-start="2000" data-easing="Back.easeOut" data-captionhidden="on" style=""><img src="images/eon.png" alt="" /></div>
                    <div class="tp-caption sfb slide-title" data-x="center" data-y="450" data-speed="500" data-start="4000" data-easing="Back.easeOut" data-captionhidden="on" style="font-size:20px; padding:10px 30px;">Where words fails <strong>music speaks</strong>.</div>
                </li>

            </ul>
        </div>
    </div><!-- REVOLUTION SLIDER -->
</div><!-- Slider -->



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


<section>
    <div class="block gray half-parallax blackish">
        <div style="background:url(images/parallax1.jpg);" class="parallax"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="parallax-title">
                        <h2>OUR<span>SERVICES</span></h2>

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



@endsection