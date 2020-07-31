<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$landing = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 100],
];

$landing = new FieldsBuilder('Landing');

$landing
  ->addGroup('Landing')

    ->addFields(get_field_partial('partials.content')
      ->removeField('section_content')
      ->modifyField('section_header', ['instructions' => 'Enter the section header. This will be output in an H1 Tag']))
      ->addTextarea('tagline')
      ->addText('button_Text', ['label' => 'Button Text'])
        ->setWrapper(['width' => '50'])
      ->addPageLink('button_link', ['label' => 'Button Link', 'post_type' => ['page']])
        ->setWrapper(['width' => '50'])

        ->addText('secondary_button_text', ['label' => '2nd Button Text'])
          ->setWrapper(['width' => '50'])
        ->addPageLink('secondary_button_Link', ['label' => '2nd Button Link', 'post_type' => ['page']])
          ->setWrapper(['width' => '50'])

    ->addFields(get_field_partial('partials.background'))

  ->endGroup();

return $landing;
