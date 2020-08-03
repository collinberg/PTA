<article @php post_class('flex flex-col lg:w-1/2 lg:pr-5 w-full mb-5 lg:mb-10 items-stretch') @endphp>
  <div class='w-fulllg:pb-5 bg-grey'>
      <img src="@asset('images/placeholder.jpg')">
  </div>
  <div class='w-full'>
    <h2 class="entry-title text-4xl mb-0 font-bold leading-tight">
      <a href="{{ get_permalink() }}" class='text-grey-darkest border-none hover:text-primary'>{!! get_the_title() !!}</a>
    </h2>
    @include('partials/entry-meta')
    <div class='entry-summary leading-relaxed'>
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
