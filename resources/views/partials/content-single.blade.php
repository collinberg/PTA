<article @php post_class('pb-5 lg:pb-10 mt-5') @endphp>
  <header>
    <h1 class="entry-title text-5xl mb-0 font-bold leading-tight">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
</article>
