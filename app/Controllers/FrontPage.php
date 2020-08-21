<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  protected $acf = true;

  public function newsLoop()
  {

      $news_loop = get_posts([
        'post_type' => 'post',
        'posts_per_page' => 3,
        'suppress_filters' => false
      ]);


     return array_map(function ($post) {
          return [
              'content'   => get_the_excerpt( $post->ID ),
              'time'      => get_the_time('F, Y', $post->ID),
              'permalink' => get_permalink( $post->ID),
              'title'     => get_the_title( $post->ID ),
              'thumbnail' => get_the_post_thumbnail_url($post->ID,'news_thumb') ?: \App\asset_path('images/placeholder.jpg'),
          ];
      }, $news_loop);
    }

  public function eventLoop()
  {

      $events_loop = tribe_get_events([
        'posts_per_page' => 3,
        'start_date'     => 'now',
      ]);


     return array_map(function ($post) {
          return [
            'title'         =>  get_the_title( $post->ID ),
            'event_month'   =>  tribe_get_start_date($post->ID, false,'M'),
            'event_day'     =>  tribe_get_start_date($post->ID, false,'d'),
            'all_day'       =>  tribe_event_is_all_day($post->ID),
            'event_start'   =>  tribe_get_start_time( $post->ID, false ),
            'event_end'     =>  tribe_get_end_time( $post->ID, false ),
            'image'         =>  get_the_post_thumbnail($post->ID),
            'excerpt'       =>  get_the_excerpt( $post->ID ),
            'link'          =>  get_the_permalink( $post->ID ),
            'event_cat'     =>  get_the_term_list(  $post->ID, 'tribe_events_cat','<ul class="event_cats_list mx-0 p-0 inline"><li>','</li><li>', '</li></ul>'),
          ];
      }, $events_loop);
    }

  public function FlexGenerator()
  {
     $page_builder = get_field('home_sections');
     $data = [];


     if ($page_builder) {

         $i = 0;

         foreach($page_builder as $block) {

           $type = $block['acf_fc_layout'];
           $classes = "py-5 lg:py-10 ";

           if($type == 'Logo')
           {

             $this_block = (object) [
               'index'               => $i,
               'block_type'          => $type,
               'section_classes'     => $classes,
               'header'              => $block[$type]['section_header'],
               'background_color'    => $block[$type]['background_color'],
               'logos'               => $block[$type]['logo_repeater'],
             ];

             array_push($data, $this_block);

           }
           elseif($type == 'News')
           {

             if( !empty($block[$type]['background_image']) ){
               $classes .= 'custom-bg';
             }

             $this_block = (object) [
               'index'               => $i,
               'block_type'          => $type,
               'header'              => $block[$type]['section_header'],
               'background_color'    => $block[$type]['background_color'],
               'section_classes'     => $classes,
               'all_fields'          => $block[$type],
             ];

             array_push($data, $this_block);
           }
           elseif($type == 'Landing')
           {

            $classes .= 'min-h-screen flex justify-center flex-col ';

             if( !empty($block[$type]['background_image']) ){
               $classes .= 'custom-bg';
             }

             $this_block = (object) [
               'index'               => $i,
               'block_type'          => $type,
               'header'              => $block[$type]['section_header'],
               'background_color'    => $block[$type]['background_color'],
               'section_classes'     => $classes,
               'all_fields'          => $block[$type],
             ];

             array_push($data, $this_block);
           } elseif($type == 'Events')
           {

             if( !empty($block[$type]['background_image']) ){
               $classes .= 'custom-bg';
             }

             $this_block = (object) [
               'index'               => $i,
               'block_type'          => $type,
               'header'              => $block[$type]['section_header'],
               'background_color'    => $block[$type]['background_color'],
               'section_classes'     => $classes,
               'all_fields'          => $block[$type],
             ];

             array_push($data, $this_block);
           }

         $i++;

       }
       $data = (object) $data;
       return $data;
     }
   }

}
