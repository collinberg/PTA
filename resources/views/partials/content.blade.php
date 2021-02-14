<?php
  $thumb = get_the_post_thumbnail_url() ?: \App\asset_path('images/placeholder.jpg')
  
?>

<article @php post_class('article-post flex flex-col mb-5 lg:mb-10 items-stretch') @endphp>
  <div class='w-full mb-2'>
    <a href="{{ get_permalink() }}" class='border-none'>
      <img src="<?php echo $thumb; ?>" alt="{!! get_the_title() !!}" class='rounded-sm'>
    </a>
  </div>
  <div class='w-full'>
    <h2 class="entry-title text-lg lg:text-3xl mb-0 font-bold leading-none mb-2">
      <a href="{{ get_permalink() }}" class='text-grey-darkest border-none hover:text-primary'>{!! get_the_title() !!}</a>
    </h2>
    @include('partials/entry-meta')
    <div class='entry-summary leading-relaxed'>
      @php the_excerpt() @endphp
    </div>
  </div>
</article>
