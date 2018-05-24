<?php

require_once 'vendor/autoload.php';

$json = new \App\Decorator\ChoiceType(
    new \App\Decorator\InputGroupType()
);

echo $json->render();
