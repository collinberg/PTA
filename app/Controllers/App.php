<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function footerNewsletter(){
      return get_field('newsletter_signup_code','options');
    }

    public function siteLogo()
    {
        $logoURL = get_field('logo','options');
        return $logoURL;
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }

        if( is_post_type_archive('tribe_events')) {
          return 'Events';
        }

        if( is_singular('post') ) {
            $blogPage = get_option( 'page_for_posts' );
            return get_the_title($blogPage);
        }

        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }

        if (is_singular('tribe_events')) {
            return 'Events';
        }
        return get_the_title();
    }

    public function social()
    {
      return (object) array(
         'facebook'  =>   get_field('facebook','options'),
         'twitter'   =>   get_field('twitter','options'),
         'youtube'   =>   get_field('youtube','options'),
         'instagram' =>   get_field('instagram','options')
      );
    }

    public function pageLanguages()
    {
      $languages = icl_get_languages('skip_missing=1');
      if(1 < count($languages)){
        foreach($languages as $l){
          if(!$l['active']) $langs[] = '<li class="men-item"><a href="'.$l['url'].'"><i class="fas fa-globe"></i> English/Español</a></li>';
        }
        return join(', ', $langs);
      }
    }
}
