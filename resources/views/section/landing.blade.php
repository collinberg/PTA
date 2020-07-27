<section class='full-section flex items-center justify-center relative' id='homeLanding'>
  <div class='carousel-container absolute'>
    @foreach($carousel_images as $image)
      <div style="background: url({!! $image['url'] !!}); background-size: cover; background-position: 50% 50%;"  class='w-full carouselImg' id='f{!! $loop->index !!}'></div>
    @endforeach

  </div>
	<div class='w-11/12 sm:w-2/3 lg:w-1/3 text-center relative'>
		<h1 class=''>Preserving the City We Love</h1>
		<p class='text-white mx-auto font-bold mb-5'>We're on the frontlines, protecting the unique landmarks and neighborhoods that make up the heart and soul of New York.</p>
		<a href="/who-we-are" class='btn text-white my-4 px-12 inline-block'>About Us</a>
	</div>
</section>
