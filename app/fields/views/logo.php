<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$logo = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 100],
];

$logo = new FieldsBuilder('Logo');

$logo
  ->addGroup('Logo')

    ->addFields(get_field_partial('partials.content')
      ->removeField('section_content'))
      ->addRepeater('logo_repeater',['label' => 'Sponsors'])
        ->addImage('logo_image',['label' => 'Logo','return_format' => 'url'])
        ->endRepeater()
      ->addFields(get_field_partial('partials.background'))
  ->endGroup();

return $logo;
