@extends('layouts.app')

@section('content')
  @include('partials.page-header')
<section class="py-16">
  <div class='container'>
    @if (!have_posts())
      <div>
        <div class="alert alert-warning">
          {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      </div>
    @endif
  </div>
</section>
@endsection
