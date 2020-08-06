export default {
  init() {
    // JavaScript to be fired on all pages
    function menuMorph(){
			$('.sitewrapper').toggleClass('openNav');
			$('#menuToggle').toggleClass('open');
			$('#mega-nav').toggleClass('open');

		}
		$('#menuToggle').click(menuMorph);

    function searchToggle(){
      $('.search-modal').toggleClass('openSearch');
      $('.search-icon').toggleClass('hidden');
      $('.close-search').toggleClass('hidden');
			$('#searchToggle').toggleClass('open');
    }
    $('#searchToggle').click(searchToggle);


    $('.content').fitVids();
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
