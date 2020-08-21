@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="wrap container mb-10" role="document">
    <div class="content flex flex-wrap">
      <main class="main w-full pt-10">
        @if (!have_posts())
          <div class="alert alert-warning">
            {{ __('Sorry, no results were found.', 'sage') }}
          </div>
          {!! get_search_form(false) !!}
        @endif

        @while(have_posts()) @php the_post() @endphp
          @include('partials.content-search')
        @endwhile

        {!! get_the_posts_navigation() !!}
    </main>
  </div>
</div>

@endsection
