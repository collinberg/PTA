@if( !empty($block->background_color))
  <section class='{{ $block->section_classes }} '
            style="background-color: {{  $block->background_color  }}"
            id='section-{{$block->index}}'>
@elseif( !empty($block->all_fields['background_image']))
  <section class='{{ $block->section_classes }}'
           style="background-image: url({{  $block->all_fields['background_image']['url'] }}); background-size: {{  $block->all_fields['background_image_size']}}; background-position: center center;"
           id='section-{{$block->index}}'>
@else
  <section class='{{ $block->section_classes }}'
           id='section-{{$block->index}}'>
@endif
	<div class='w-11/12 sm:w-2/3 lg:w-2/5 text-center mx-auto'>
		<h1 class='text-white text-3xl lg:text-5xl font-bold'>{{ $block->header }}</h1>
		<p class='text-white mx-auto font-bold mb-5'>{{ $block->all_fields['tagline'] }}</p>
		<a href="{{ $block->all_fields['button_link'] }}" class='btn text-white my-4 px-12 inline-block'>{{ $block->all_fields['button_Text'] }}</a>
	</div>
</section>
