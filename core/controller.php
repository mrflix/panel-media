<?php

use Kirby\Panel\View;
use Kirby\Panel\Topbar;

use Kirby\Panel\Models\Media;

class MediaController extends Kirby\Panel\Controllers\Base {

  public function index() {

    $media   = new Media;
    $content = new View('core/view', ['files' => $media->files]);
    $content->_root = dirname(__DIR__);

    return $this->layout('app', [
      'topbar'  => new Topbar('media', $media),
      'content' => $content
    ]);
  }

}
