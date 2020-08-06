@extends('layouts.app')


@section('content')
@include('partials.page-header')
<section>
  <div class="container">
    <div class="content flex flex-wrap">
      <main class="main flex flex-wrap justify-between w-full lg:w-3/4 lg:pr-12 mt-10">
        @if (!have_posts())
          <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
          </div>
          {!! get_search_form(false) !!}
        @endif

        @while (have_posts()) @php the_post() @endphp
          @include('partials.content-'.get_post_type())
        @endwhile
          <div class='w-full'>
          {!! get_the_posts_navigation(array(
              'prev_text'                  => __( 'Prev' ),
              'next_text'                  => __( 'Next' ),
              'screen_reader_text' => __( 'Continue Reading' ),
          )) !!}
        </div>
      </main>
      @if (App\display_sidebar())
        <aside class="sidebar w-full lg:w-1/4">
          @include('partials.sidebar')
        </aside>
      @endif
    </div>
  </div>
</section>
@endsection
