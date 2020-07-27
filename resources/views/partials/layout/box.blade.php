<div class='news-card w-full md:mx-5 mb-5 items-stretch relative lg:flex-1 lg:max-w-1/3' data-loop='{!! $loop->index !!}'>
  <a href="{!! $permalink !!}" class='' title="Read more about {!! $item['title'] !!}"><img src="{!! $thumbnail !!}" alt="{!! $title !!}" class='w-full'/></a>
  <div class="pt-8 mb-5">
    <time class='text-grey-darker mb-3 uppercase font-bold block text-sm'>{!! $time !!}</time>
    <h3 class='mb-3 xxl:mb-5 text-xl xl:text-2xl xxl:text-4xl font-bold'><a href="{!! $permalink !!}" class="text-black hover:text-primary">{!! $title !!}</a></h3>
    <p class='lg:text-lg font-normal'>{!! $content !!}</p>
  </div>
</div>
