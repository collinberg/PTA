<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 100],
];

$newsSection = new FieldsBuilder('News');

$newsSection
  ->addGroup('News')

    ->addFields(get_field_partial('partials.content')
      ->removeField('section_content'))

    ->addFields(get_field_partial('partials.background'))
    ->addFields(get_field_partial('partials.display')
      ->removeField('header_location')
      ->removeField('header_color'))

  ->endGroup();

return $newsSection;
