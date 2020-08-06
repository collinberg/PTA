
<form role="search" method="get" class="search-form flex justify-center my-1" action="{{ esc_url( home_url( '/' ) ) }}">
  <label class='w-full m-0 p-0'>
    <span class="screen-reader-text">{{ _x( 'Search for:', 'label' ) }}</span>
    <input type="search" class="search-field text-3xl" placeholder="{!! esc_attr_x( 'Search &hellip;', 'placeholder' ) !!}" value="{{ get_search_query() }}" name="s" />
  </label>
  <button type="submit" class="search-submit" value="{{ esc_attr_x( 'Search ', 'submit button' ) }}" />
    Search <i class='fas fa-search'></i>
  </button>
</form>
