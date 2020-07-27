<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function newsLoop()
  {

      $news_loop = get_posts([
        'post_type' => 'post',
        'posts_per_page' => 3
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

  protected $acf = true;

   public function FlexGenerator()
   {
     $page_builder = get_field('home_sections');
     $data = [];


     if ($page_builder) {

         $i = 0;

         foreach($page_builder as $block) {

           $type = $block['acf_fc_layout'];
           $classes = "py-5 lg:py-10 ";

           if($type == 'logo') {

             $this_block = (object) [
               'index'               => $i,
               'block_type'          => $type,
               'classes'              => $classes,
               'section_description' => $block['section_description'],
               'section_title'       => $block['section_title'],
               'logos'               => $block['logo_repeater'],
             ];

             array_push($data, $this_block);

           }elseif($type == 'News') {

             if( $block[$type]['padding_top'] != ''): $classes .= $block[$type]['padding_top'] . " "; endif;
             if( $block[$type]['padding_bottom'] != ''):$classes .= $block[$type]['padding_bottom'] . " "; endif;
             $classes .= $block[$type]['section_height'] . " ";
             $classes .= $block[$type]['header_location']. " ";

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
               'color'               => $block[$type]['header_color']
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
