@extends('layouts.CommonLayout')
@section('content')
<div style="background-image: url(images/bg/h.jpg);background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;" class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font primary-color">Popular Dishes</h2>
            </div>
        </div>

        <div class="row popdishes">

		@foreach($dishes as $dish)
<div class="col-lg-4 col-md-4 col-sm-6">
    <a href="{{ asset($dish->image) }}" class="fh5co-card-item image-popup">
        <figure>
            <div class="overlay"><i class="ti-plus"></i></div>
            <img src="{{ asset($dish->image) }}" alt="Image" class="img-responsive">
        </figure>
        <div class="fh5co-text">
            <h1 class="cursive-font">{{ $dish->name }}</h1>
        </div>
    </a>
</div>
@endforeach





        </div>
    </div>
</div>

<div style="background-image: url(images/bg/h2.jpg);background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;" class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2 class="cursive-font primary-color">Recent Review</h2>
            </div>
        </div>

        <div class="row <!--event-->">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <!--<div class="fh5co-card-item">
						<figure>
							<img src="images/event1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div style="padding-top:10px;padding-left:10px;" class="fh5co-text">
							<div class="ab" style="padding-top:26px;border:3px solid red;">
							<h1 style="margin-bottom:10px;" class="cursive-font">Music Concerts</h1>
							<h4>09 Aug 2018</h4><hr style="width:30%;border:1px solid ;"/>
							<p style="padding:5px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn-amb">Read More</a><br/><br/>
							</div>
						</div>
					</div>-->
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                @foreach ($reviews as $review)
				<iframe width="100%" height="360" src="{{$review->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				@endforeach
				<br /><br />
                <!--<div class="fh5co-card-item">
						<a href="images/banner.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/banner.jpg" alt="Image" class="img-responsive">
						</figure>
						</a>
						<div style="padding-top:10px;padding-left:10px;" class="fh5co-text">
							<div class="ab" style="padding-top:26px;border:3px solid red;">
							<h1 style="margin-bottom:10px;" class="cursive-font">Ambrosia তে ঈদ উৎসব !</h1>
							<h3 class="cursive-font">Eid Special Fish Festival</h3>
							
							<p class="text-justify" style="padding:5px;">
							Ambrosia তাদেরকে সেবা দিতে সারা বছর দরজা খোলা রাখে যারা কখনোই এখানের লোভনীয় খাবার মিস করতে চান না। পবিত্র কুরবানির মাংস তো খাবেনই তারপরও মাছ খেতে কে না ভালবাসেন। তাই এই ঈদে রসনা বিলাসীদের  জন্য Ambrosia নিয়ে আসছে এক শুভ বার্তা। আয়োজন করছে ৬ দিনব্যাপী দুপুর এবং রাতের রকমারি মাছের আইটেম এর সমন্বয়ে মজাদার Buffet। কথা বলছিলাম এ বিশেষ আয়োজন নিয়ে জেনারেল ম্যানেজার মিস্টার বিজয় কস্তার সাথে। তিনি জানালেন, ঈদের ছুটির দিনগুলোতে অনেকেই এ সুন্দর শহর চট্টগ্রাম বেড়াতে আসেন কিন্তু এ সময় প্রায় সব রেস্টুরেন্ট বন্ধ থাকে। Ambrosia এখন খাবার এবং দর্শনীয় এ দুটোর জন্যই প্রসিদ্ধ। তাই সকল food lovers দের সুবিধার
							‌ কথা মাথায় রেখেই সময় উপযোগী এ Fish Festival এর আয়োজন করছি ।আশা করি সবারই ভালো লাগবে। আপনার প্রিয়জনদের সাথে নিয়ে ঈদের আনন্দ মুখর ছুটির দিন গুলোকে আরো আনন্দময় করে তুলতে চলে আসুন Ambrosia তে। এ আয়োজন থাকবে ২৩ শে আগস্ট থেকে ২৮শে আগস্ট পর্যন্ত। আরও জানার জন্য তৎকালীন যোগাযোগ করতে পারেন এই নাম্বারে 01713-143670 অথবা 031-2513576 নাম্বারে।-বিজ্ঞপ্তি।</p>
							<br/><br/>
							</div>
						</div>
					</div>-->
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2"></div>

        </div>
    </div>

    <?php /* ?>
	<!--menuS-->
	<div id="maincon" style="background-image: url(images/bg/h3.jpg);background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;" class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Our Menu</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="thai_cuisine.php" class="fh5co-card-item">
						<figure>
							<div class="overlay"><!--<i class="ti-plus"></i>--></div>
							<img src="images/thai/a.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h1>Thai Cuisine</h1>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="chinese_cuisine.php" class="fh5co-card-item">
						<figure>
							<div class="overlay"><!--<i class="ti-plus"></i>--></div>
							<img src="images/chinese/a.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h1>Chinese Cuisine</h1>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="indonesian_cuisine.php" class="fh5co-card-item">
						<figure>
							<div class="overlay"><!--<i class="ti-plus"></i>--></div>
							<img src="images/indonesian/a.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h1>Indonesian Cuisine</h1>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="indian_cuisine.php" class="fh5co-card-item">
						<figure>
							<div class="overlay"><!--<i class="ti-plus"></i>--></div>
							<img src="images/indian/a.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h1>Indian Cuisine</h1>
						</div>
					</a>
				</div>
			</div><br/>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="continental_cuisine.php" class="fh5co-card-item">
						<figure>
							<div class="overlay"><!--<i class="ti-plus"></i>--></div>
							<img src="images/continental/a.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h1>Continental Cuisine</h1>
						</div>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="dessert.php" class="fh5co-card-item">
						<figure>
							<div class="overlay"><!--<i class="ti-plus"></i>--></div>
							<img src="images/drinks/a.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h1>Desert, Drinks & Take away</h1>
						</div>
					</a>
				</div>
				<!--<div class="col-lg-3 col-md-3 col-sm-6">
					<a href="Party_Menu.php" class="fh5co-card-item">
						<figure>
							<div class="overlay"><!--<i class="ti-plus"></i></div>-->
						<!--	<img src="images/party/a.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h1>Special Party</h1>
						</div>
					</a>
				</div>-->
			</div>	
		</div>
	</div>
	
	<!-- //Menus ENd-->
<?php */ ?>
    <div style="background-image: url(images/new2.jpg); background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;" id="gtco-features">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 class="cursive-font">Our Services</h2>
                    <p>Ambrosia has excellent facilities for arranging different types of programmes for 500-700 people, meeting, and conference besides individual lunch/dinner arrangement. Our services and facilities include:</p>
                    <ul type="disk" class="serv text-justify">
                        <li style="color:#DBDBD9;">Three exclusive decorative dining halls.</li>
                        <li style="color:#DBDBD9;">Luxury room with 10-12 person capacity.</li>
                        <li style="color:#DBDBD9;">Exclusive karaoke room with fine facilites.</li>
                        <li style="color:#DBDBD9;">Providing audio visual equipement including TV, OHP.</li>
                        <li style="color:#DBDBD9;">500 person sitting lunch/diner and buffet service</li>
                        <li style="color:#DBDBD9;">700 person standing lunch dinner</li>
                        <li style="color:#DBDBD9;">150 and 50 person capacity with individual hall for meeting, conference.</li>
                        <li style="color:#DBDBD9;">And all kind of party with all facilities.</li>
                        <li style="color:#DBDBD9;">Individual parking area with security.</li>
                        <li style="color:#DBDBD9;">All kind of outside catering.</li>
                        <li style="color:#DBDBD9;">Take away lunch box.</li>
                        <li style="color:#DBDBD9;">Kids entertainment.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--<div style="background-image: url(images/rest.jpg);background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;" id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2 class="cursive-font primary-color">Fun Facts</h2>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="5" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Avg. Rating</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="43" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Food Types</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="32" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Chef Cook</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="1985" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Year Started</span>

					</div>
				</div>
					
			</div>
		</div>
	</div>-->

@endsection