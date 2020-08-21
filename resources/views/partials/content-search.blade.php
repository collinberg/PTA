<article @php post_class('bg-white mb-5 lg:mb-10 lg:p-10 p-5') @endphp>
  <header>
    <h2 class="entry-title font-bold text-2xl"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
    @if (get_post_type() === 'post')
      @include('partials/entry-meta')
    @endif
  </header>
  <div class="entry-summary">
    @php the_excerpt() @endphp
  </div>
  <div class='post-type-tag mt-10'>
    <span class='font-bold text-sm opacity-50'>
      @if (get_post_type() === 'post')
        <i class="fas fa-newspaper"></i> news
      @elseif(get_post_type() == 'tribe_events')
        <i class='fas fa-calendar'></i> Events
      @elseif(get_post_type() == 'page')
        <i class='fas fa-file'></i> Page
        @else
        {{get_post_type() }}
      @endif
    </span>
  </div>
</article>
