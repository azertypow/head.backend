<?php

/**
 * @var Kirby\Cms\Page $page
 * @var Kirby\Cms\App $kirby
 */


require_once('site/phpTools/getImageData.php');

function getStructFieldData ($items) {

  $toReturn = [];

  foreach ($items as $item) {
    array_push($toReturn, [
      'description_EN'  => $item->description_en()->value(),
      'description_FR'  => $item->description_fr()->value(),
      'link'            => $item->link()->value(),
      'title'           => $item->title()->value(),
      'images'          => array_map(fn($image) => getImageData( $image ), $item->images()->toFiles()->toArray()),
    ]);
  }

  return $toReturn;
}

$array = array(
  'description_EN'  => $page -> description_en() -> value(),
  'description_FR'  => $page -> description_fr() -> value(),
  'items'           => getStructFieldData($page -> items()->toStructure()),
  'title'           => $page -> title(),
);

echo json_encode($array, JSON_UNESCAPED_UNICODE);
