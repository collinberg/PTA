<header class="banner bg-primary w-full relative" aria-label="Main Navigation">
  <div class="px-8 mx-auto">
    <div class='flex items-start'>
      <div class='w-full flex row items-center py-2'>
        @if( $logo != '')
        <a class="brand font-bold text-2xl uppercase border-none" href="{{ home_url('/') }}"><img src='{{ $logo }}' class='brand-logo h-16 mt-5' alt="{{ $site_name }}"></a>
        @else
        <a class="brand font-bold text-2xl uppercase border-none text-white" href="{{ home_url('/') }}">{{ $site_name }}</a>
        @endif
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
      <div class='pt-5 w-1/5 hidden lg:flex row justify-end'>
        <a href="/donate" class='btn btn-secondary'>Donate</a>
        <button id='searchToggle' class="desktop-search-toggle lg:ml-2 p-3" data-search-toggle="closed" aria-label="Search Button">
            <svg class="svg-icon mx-auto block search-icon" aria-hidden="true" role="img" focusable="false" width="23" height="23" viewBox="0 0 23 23">
              <path d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z" transform="translate(-20 -31)"></path>
            </svg>
            <svg class="svg-icon mx-auto hidden close-search" aria-hidden="true" role="img" preserveAspectRatio="none" width="23" height="23" viewBox="0 0 48 48">
              <path d="M45.5 0L24 21.5L2.5 0L0 2.5L21.5 24L0 45.5L2.5 48L24 26.5L45.5 48L48 45.5L26.5 24L48 2.5L45.5 0Z"/>
            </svg>
          </button>
      </div>
      <button id='menuToggle' class='lg:hidden menu-toggle' type='button'>
        <span class='bar top'></span>
        <span class='bar middle'></span>
        <span class='bar bottom'></span>
        <span class='menu-title text-white'>Menu</span>
      </button>
    </div>
  </div>
</header>
<!-- Search Bar -->
<div class='search-modal flex-wrap justify-center flex-col z-50'>
  <div class='px-8 mx-auto lg:w-3/4'>
    @include('partials.searchform')
  </div>
</div>
