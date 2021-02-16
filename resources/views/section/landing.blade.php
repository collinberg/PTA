@if( !empty($block->background_color))
  <section class='{{ $block->section_classes }} relative'
            style="background-color: {{  $block->background_color  }}"
            id='section-{{$block->index}}' aria-label="Marketing & Introduction Section">
@elseif( !empty($block->all_fields['background_image']))
  <section class='{{ $block->section_classes }} v'
           style="background-image: url({{  $block->all_fields['background_image']['url'] }}); background-size: {{  $block->all_fields['background_image_size']}}; background-position: center center;"
           id='section-{{$block->index}}' aria-label="Marketing & Introduction Section">
@else
  <section class='{{ $block->section_classes }} relative'
           id='section-{{$block->index}}' aria-label="Marketing & Introduction Section">
@endif
  <div class='carousel-container absolute'>
    @foreach($carousel_images as $image)
      <div style="background: url({!! $image['url'] !!}); background-size: cover; background-position: 50% 50%;"  class='w-full carouselImg' id='f-{!! $loop->index !!}'></div>
    @endforeach
  </div>
	<div class='carousel-content sm:w-2/3 lg:w-2/5 text-center mx-auto relative px-2'>
		<h1 class='text-white text-5xl lg:text-6xl font-bold'>{{ $block->header }}</h1>
		<p class='text-white mx-auto font-bold mb-5'>{{ $block->all_fields['tagline'] }}</p>
		<a href="{{ $block->all_fields['button_link'] }}" class='btn text-white my-4 px-12 inline-block'>{{ $block->all_fields['button_Text'] }}</a>
	</div>
</section>
