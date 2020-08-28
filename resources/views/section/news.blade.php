
@if( !empty($block->background_color))
  <section class='{{ $block->section_classes }}'
            style="background-color: {{  $block->background_color  }}"
            id='section-{{$block->index}}' aria-label="Section about Latest News">
@else
  <section class='{{ $block->section_classes }}'
           id='section-{{$block->index}}' aria-label="Section about Latest News">
@endif
  <div class='container'>
		<h2 class='text-center font-bold text-4xl'>{{$block->header }}</h2>
		<div class='flex my-8 flex-wrap'>
      @foreach($news_loop as $item)
        @include('partials/layout.box',$item)
      @endforeach
		</div>
    <div class='text-center w-full'>
      <a href="/news" class='archive-link text-black hover:text-primary underline font-bold text-lg'>View All News <i class="fas fa-chevron-right"></i></a>
    </div>
	</div>
</section>
