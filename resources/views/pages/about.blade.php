@extends('layout.main')

@section('content')

<!-- about -->
	<section class="about py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-md-5 mb-4">
				<h3 class="title">About Us</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
			</div>
			<p class="aboutpara text-center mx-auto"> Capitolphysiotherapy Services Limited is a diversed rehabilitation and pain managed company offering physiotherapy and occupational therapy services to improve on people's health and lifestyle both at their homes and work places.The company was established in the year 2010 at Ongata Rongai town.

We have been providing quality services to our clients and that has seen us growing and gaining more corporate clientele.We have partnered with; </p>
<div style="text-align:center" class="categories my-4 p-4">
									<ul>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="#">Jubilee Insuarance Company. </a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="#">Resolution health East Africa Limited. </a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="#">Child Doctor Japan(NGO).</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="#">Kenya Airways.</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="#">First Assuarance Company Limited.</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="#">UAP Insuarance Company. </a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="#">APA Insuarance Company.</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="#">Madison Insuarance Company.</a>
										</li>
										<li class="mt-3">
											<i class="fas fa-check mr-2"></i>
											<a href="#">Co-operative Bank of Kenya.</a>
										</li>
									</ul>
								</div>
		</div>
	</section>
	<!-- //about -->

	<!-- middle section -->
	<div style="margin-top:-10%"class="w3ls-welcome py-5">
		<div class="container py-xl-5 py-lg-3">
			<div style="margin:-5%" class="row comments-grid">
										<div class="col-3 comments-grid-left">
											<img src="images/ceo.jpg" alt=" " class="img-thumbnail" />
										</div>
										<div class="col-8 comments-grid-right mt-3">
											<h4>Johnstone O. Achola.</h4>
											<ul class="my-2">
												<li class="font-weight-bold">Founder and CEO
													<i>|</i>
												</li>
												<li>
													<a href="#" class="font-weight-bold">Chief Physiotherapist</a>
												</li>
											</ul>
											<p>I take this chance to welcome you to Rongai Physical Therapy services LTD,a clinic that puts your physical needs first and offers the best quality services to ensure your optimum satisfaction.</p>
                      <p>Our clinic is currently situated at 5th avenue suites opposite Nairobi traffic headquater.In our clinic we believe in improving the physical status of our clients so that they immediately feel the difference.</p>
                      <p>We believe in ethical practice where our patients' privacy is well kept.Our interaction with clients is at best where patients get worth for their money.We give the best attention to patients especially in understanding their problems without rushing to solve them.</p>
                      <p>I therefore strongly recommend you to come and experience our services.</p>
										</div>
									</div>
		</div>
	</div>
	<!-- //middle section -->

	<!-- team -->
	<section class="team py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Our Staff</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2"></p>
			</div>
			<div class="row inner-sec-w3layouts-agileinfo">
				<div style="" class="col-md-4 team-grids text-center">
					<img src="images/ceo.jpg" height=""class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Johnstone O. Achola</h4>
							<h6>Chief Physiotherapist</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter-square"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest"></i>
							</a>

						</div>

					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- team -->

	<!-- services -->
	<div class="why-choose-agile pt-5" id="services">
		<div class="container pt-xl-5 pt-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Payments</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="mt-2"><b>We accept cash payments and use of medical cards from below companies:</b></p>

				<div style="margin-left:5%" class="row">
				    <div class="col-xs-3">
				        <img src="images/uap.png " class="img-responsive">
				    </div>
				    <div class="col-xs-9 ">
				        <img src="images/jubilee.png " class="pull-right img-responsive">
				    </div>
						<div class="col-xs-9 ">
				        <img src="images/resolution.png " class="pull-right img-responsive">
				    </div>

				</div>

				<div style="margin-left:10%" class="row">
				    <div class="col-xs-3">
				        <img src="images/apa.jpg " class="img-responsive">
				    </div>
				    <div style="margin-left:2%;margin-right:2%"class="col-xs-9 ">
				        <img src="images/madison.png " class="pull-right img-responsive">
				    </div>
						<div class="col-xs-9 ">
				        <img src="images/firstmed.png " class="pull-right img-responsive">
				    </div>
				</div>

			</div>


		</div>
	</div>
	<!-- //services -->

@endsection
