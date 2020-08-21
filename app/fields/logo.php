<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$themeOption_Logo = new FieldsBuilder('Company Branding');

$themeOption_Logo
    ->setLocation('options_page', '==', 'theme-general-settings')
      ->setGroupConfig('position', 'side');

$themeOption_Logo
  ->AddImage('logo',['return_format' => 'url'])
  ->addColorPicker('brand_color',['label' => 'Brand Color']);

return $themeOption_Logo;
