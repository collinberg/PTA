<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function logo()
    {
        $logo = get_field('logo','options');
        return $logo['url'];
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
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
}
