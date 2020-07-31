<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$eventsSection = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 100],
];

$eventsSection = new FieldsBuilder('Events');

$eventsSection
  ->addGroup('Events')

    ->addFields(get_field_partial('partials.content')
          ->removeField('section_content')
          ->addNumber('event_amount',['label' => 'Number of Events']))

    ->addFields(get_field_partial('partials.background'))

  ->endGroup();

return $eventsSection;
