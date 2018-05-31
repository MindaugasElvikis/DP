<?php

require_once 'vendor/autoload.php';

$receiver = new \App\Command\Receiver();

$invoker = new \App\Command\Invoker($receiver);
$invoker->setCommands([
    'app:hello_world' => \App\Command\HelloWorldCommand::class,
    'app:bye_world'   => \App\Command\ByeWorldCommand::class,
]);

$invoker->run('app:bye_world');

echo $receiver->getOutput();
