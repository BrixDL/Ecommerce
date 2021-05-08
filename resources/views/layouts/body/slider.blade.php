@php 
$sliders = DB::table('sliders')->get();


@endphp

<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						@foreach($sliders AS $slider)
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>{{$slider-> title }} New <br>Collection!</h1>
									<p>{{ $slider->description}}</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="{{ asset($slider->image) }}" alt="">
								</div>
							</div>
						</div>

						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>