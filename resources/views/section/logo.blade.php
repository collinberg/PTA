
@if( !empty($block->background_color))
  <section class='{{ $block->section_classes }}'
            style="background-color: {{  $block->background_color  }}"
            id='section-{{$block->index}}' aria-label="Section about Sponsors of the PTA">
@else
  <section class='{{ $block->section_classes }}'
           id='section-{{$block->index}}' aria-label="Section about Sponsors of the PTA">
@endif
  <div class='container'>
    <div class="text-center">
      <h2 class='text-center font-bold text-4xl'>Sponsors</h2>
    </div>

    <div id="jssor_1">
    	<div class='slides' data-u="slides">
    		@if($block->logos)
    		  @foreach ($block->logos as $sponsor)
    		   <div>
    			      <img data-u="image" src="{{ $sponsor['logo_image'] }}" alt="Spnosor Logos  ">
    		    </div>
          @endforeach
        @endif
    	</div>
    </div>

  </div>
</section>
