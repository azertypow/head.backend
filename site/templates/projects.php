<?php

/**
 * @var Kirby\Cms\Page $page
 * @var Kirby\Cms\App $kirby
 */

use Kirby\Cms\Page;

require_once('site/phpTools/getImageData.php');

$array = [];

/** @var Page $page */
foreach ($page->children() as $key => $page) {

  $array[] = [
    "title" => $page->title(),
    "cover" => array_map(fn($image) => getImageData($image), $page->images_covers()->toFiles()->toArray()),
    "apiUrl" => $page->url(),
    "apiUri" => $page->uri(),
    "categories" => $page->categories()->value(),
  ];
}
echo json_encode($array, JSON_UNESCAPED_UNICODE);
