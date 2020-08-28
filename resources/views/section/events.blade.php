
@if( !empty($block->background_color))
  <section class='{{ $block->section_classes }}'
            style="background-color: {{  $block->background_color  }}"
            id='section-{{$block->index}}' aria-label="Section About Upcoming Events">
@else
  <section class='{{ $block->section_classes }}'
           id='section-{{$block->index}}' aria-label="Section About Upcoming Events">
@endif
  <div class='container'>
		<h2 class='text-center font-bold text-4xl'>{{$block->header }}</h2>
		<div class='flex my-8 flex-wrap'>
      <ul class="mx-auto lg:w-3/4">
      @foreach($event_loop as $item)
        @include('partials/layout.event',$item)
      @endforeach
    </ul>
		</div>
    <div class='text-center w-full'>
      <a href="/events" class='archive-link text-black hover:text-primary underline font-bold text-lg border-none'>View All Events <i class="fas fa-chevron-right"></i></a>
    </div>
	</div>
</section>
