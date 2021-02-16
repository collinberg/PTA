<section class="bg-primary py-5 lg:py-20 text-white" id="Newsletter" aria-label="Newsletter Signup">
  <div class='container'>
    <h2 class='font-bold text-center lg:text-4xl m-0 p-0'>Sign up for our Newsletter</h2>
    @php echo do_shortcode($footer_newsletter) @endphp
  </div>
</section>
<footer class="content-info bg-grey-darkest pt-5 text-white" aria-label="Website Footer">
  <div class="container lg:py-16">
    <div class='flex flex-wrap justify-between'>
      <div class='w-full lg:w-1/3'>
        @php dynamic_sidebar('footer_left') @endphp
        <p class='text-grey-500 social-links'>Follow Us<br>
  				@if(!empty($social->facebook))<a href="{{ $social->facebook }}" 	target="_blank" title="facebook"    class="hover:no-underline" rel='noopener'><i class="fab fa-facebook-f"></i></a>@endif
  				@if(!empty($social->youtube))<a href="{{ $social->youtube }}" 		target="_blank" title="youtube"     class="hover:no-underline" rel='noopener'><i class="fab fa-youtube"></i></a>@endif
  				@if(!empty($social->instagram))<a href="{{ $social->instagram }}" target="_blank" title="instagram"   class="hover:no-underline" rel='noopener'><i class="fab fa-instagram"></i></a>@endif
  				@if(!empty($social->twitter))<a href="{{ $social->twitter }}" 		target="_blank" title="twitter"     class="hover:no-underline" rel='noopener'><i class="fab fa-twitter"></i></a>@endif
  			</p>
      </div>
      <div class='w-full lg:w-1/4'>
        @php dynamic_sidebar('footer_middle') @endphp
      </div>
      <div class='w-full lg:w-1/4'>
        @php dynamic_sidebar('footer_right') @endphp
      </div>
    </div>
  </div>
  <div class='bottom_footer_links'>
    <div class='container'>
      <div class='flex flex-row justify-center py-5'>
        @if (has_nav_menu('bottom_footer'))
          {!! wp_nav_menu(['theme_location' => 'bottom_footer', 'menu_class' => 'nav']) !!}
        @endif
      </div>
    </div>
  </div>
</footer>
