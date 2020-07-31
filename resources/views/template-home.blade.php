{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')

@if ($flex_generator)

  @foreach ($flex_generator as $block)

    @if ($block->block_type == 'Logo')
      @include('section.logo')
    @endif

    @if ($block->block_type == 'Landing')
      @include('section.landing')
    @endif

    @if ($block->block_type == 'News')
      @include('section.news')
    @endif

  @endforeach
@endif

@endsection
