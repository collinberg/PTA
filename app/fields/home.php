<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$home_flex = new FieldsBuilder('Section Generator',[
    'style' => 'seamless',
    'hide_on_screen' => ['the_content']]);

$home_flex
    ->setLocation('post_template', '==', 'views/template-home.blade.php');

$home_flex
  ->addFlexibleContent('home_sections', ['label' => 'Sections'])

    ->addLayout(get_field_partial('views/newsSection'));

return $home_flex;
