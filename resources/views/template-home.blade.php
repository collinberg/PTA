{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')

@if ($flex_generator)

  @foreach ($flex_generator as $block)

    @if ($block->block_type == 'Logo')

      @include('section.logo')

    @elseif ($block->block_type == 'Landing')

      @include('section.landing')

    @elseif($block->block_type == 'News')

      @include('section.news')

    @elseif($block->block_type == 'Events')

      @include('section.events')

    @elseif($block->block_type == 'One Column')

      @include('partials.layout.aboutOneColumn')

    @elseif($block->block_type == 'Two Columns')

      @include('partials.layout.aboutTwoColumn')

    @endif

  @endforeach
@endif

@endsection
