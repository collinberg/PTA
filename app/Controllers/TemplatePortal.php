<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplatePortal extends Controller
{

  public function documentRepeater()
  {
    $documentRepeater = get_field('documents');

    return $documentRepeater;
  }


}
