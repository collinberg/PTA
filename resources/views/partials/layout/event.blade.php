<li class='text-black text-lg text-bold mb-5 bg-white flex border-grey border-2'>
   <div class='date-block text-3xl bg-primary w-48 text-center flex flex-wrap flex-col text-white content-center justify-center'>
     <span class='date pt-5 text-5xl uppercase font-bold block leading-none'>{!! $event_day !!}</span>
     <span class='date pb-5 text-3xl uppercase font-bold block leading-tight'>{!! $event_month !!}</span>
   </div>
   <div class="p-5 flex w-full flex-wrap">
     <div class='lg:w-3/4'>
       <span class='font-bold text-2xl block leading-tight underline-none hover:text-primary'><a href="{!! $link !!}" class='border-none'>{!! $title !!}</a></span>
       <div class='block mt-1 mb-3 '>
       @if( $all_day )
         <time class='py-1 text-sm font-bold mb-5 opacity-50'><i class='fa fa-clock pr-1'></i>All Day</time>
         @else
         <time class='py-1 text-sm font-bold mb-5 opacity-50'><i class='fa fa-clock'></i> {!! $event_start !!} - {!! $event_end !!}</time>
         @endif
         {!! $event_cat !!}
       </div>
       <p class='block'>{!! $excerpt !!}</p>
    </div>
    <div class='lg:w-1/4 hidden lg:block'>
      {!! $image !!}
    </div>
 </div>
</li>
