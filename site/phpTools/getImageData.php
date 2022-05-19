<?php

function getImageData(Array $arrayOfImageData) {
    return [
        "url"           => $arrayOfImageData['url'],
        "safeName"      => $arrayOfImageData['safeName'],
    ];
}
