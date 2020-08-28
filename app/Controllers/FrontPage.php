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
           }

           elseif($type == 'Events')
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

           elseif( $type == 'One Column')
           {
             $classes .= $block[$type]['padding_top'] . " ";
             $classes .= $block[$type]['padding_bottom'] . " ";
             $classes .= $block[$type]['section_height'];

             $this_block = (object) [
               'index'               => $i,
               'block_type'          => $type,
               'header'              => $block[$type]['section_header'],
               'content'             => $block[$type]['section_content'],
               'background_color'    => $block[$type]['background_color'],
               'section_classes'     => $classes,
               'all_fields'          => $block[$type]
             ];

             array_push($data, $this_block);

           }

           elseif( $type == 'Two Columns')
           {

             $classes .= $block[$type]['padding_top'] . " ";
             $classes .= $block[$type]['padding_bottom'] . " ";
             $classes .= $block[$type]['section_height'];

             $column_widths = $block[$type]['column_widths'];

             if($column_widths == 1):
               $leftColumn  = "lg:w-1/4";
               $rightColumn = "lg:w-3/4 lg:pl-10";
             elseif($column_widths == 2):
               $leftColumn  = "lg:w-1/3 lg:pr-5";
               $rightColumn = "lg:w-2/3 lg:pl-5";
             elseif($column_widths == 3):
               $leftColumn  = "lg:w-1/2 lg:pr-5";
               $rightColumn = "lg:w-1/2 lg:pl-5";
             elseif($column_widths == 4):
               $leftColumn  = "lg:w-2/3 lg:pr-5";
               $rightColumn = "lg:w-1/3 lg:pl-5";
             elseif($column_widths == 5):
               $leftColumn  = "lg:w-3/4 lg:pr-10";
               $rightColumn = "lg:w-1/4";
             endif;

             $this_block = (object) [
               'index'               => $i,
               'block_type'          => $type,
               'header'              => $block[$type]['section_header'],
               'content'             => $block[$type]['section_content'],
               'right_column'        => $block[$type]['right_column'],
               'background_color'    => $block[$type]['background_color'],
               'section_classes'     => $classes,
               'left_width'          => $leftColumn,
               'right_width'         => $rightColumn,
               'all_fields'          => $block[$type]
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
