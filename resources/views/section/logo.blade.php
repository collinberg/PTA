
@if( !empty($block->background_color))
  <section class='{{ $block->section_classes }}'
            style="background-color: {{  $block->background_color  }}"
            id='section-{{$block->index}}'>
@else
  <section class='{{ $block->section_classes }}'
           id='section-{{$block->index}}'>
@endif
  <div class='container'>
    <div class="text-center">
      <h2 class='text-center font-bold text-4xl'>Sponsors</h2>
    </div>
    <ul class='image-repeater m-0 p-0'>
      @if($block->logos)
        @foreach ($block->logos as $sponsor)
          <li class='inline-block max-w-1/4'><img src="{{ $sponsor['logo_image'] }}" alt='sponsor' class='p-3'/></li>
        @endforeach
      @endif
    </ul>
  </div>
</section>
