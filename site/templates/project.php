<?php

/**
 * @var Kirby\Cms\Page $page
 * @var Kirby\Cms\App $kirby
 */

require_once('site/phpTools/getImageData.php');

$array = array(
  'project_title'   => $page -> project_title()   -> value(),
  'images_covers'   => array_map(fn($image) => getImageData( $image ), $page->images_covers()->toFiles()->toArray()),
  'description_EN'  => $page -> description_EN()  -> kirbytext(),
  'description_FR'  => $page -> description_FR()  -> kirbytext(),
  'students'        => $page -> students()        -> kirbytext(),
  'professors'      => $page -> professors()      -> kirbytext(),
  'assistants'      => $page -> assistants()      -> kirbytext(),
);

echo json_encode($array, JSON_UNESCAPED_UNICODE);
