<?php

require_once 'vendor/autoload.php';

$form = new \App\Composite\Form();

$emailInput = new \App\Composite\InputElement();
$emailInput->setClassess(['email', 'text', 'form-validate']);

$form
    ->setClassess(['registration-form'])
    ->addLement($emailInput)
    ->addLement(new \App\Composite\InputElement())
    ->addLement(new \App\Composite\InputElement());

echo $form->render();
