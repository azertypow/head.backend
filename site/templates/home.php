<?php

/**
 * @var Kirby\Cms\Page $page
 * @var Kirby\Cms\App $kirby
 * @var Kirby\Cms\Site $site
 */


$array = array(
  'title'               => $site->title()->value(),
  'description_en' => $page->description_en()->value(),
  'description_fr' => $page->description_fr()->value(),
);

echo json_encode($array, JSON_UNESCAPED_UNICODE);
