<?php

require_once 'vendor/autoload.php';

$receiver = new \App\Command\Receiver();

$invoker = new \App\Command\Invoker($receiver);
$invoker->setCommands([
    \App\Command\HelloWorldCommand::NAME => \App\Command\HelloWorldCommand::class,
    'app:bye_world'                      => \App\Command\ByeWorldCommand::class,
]);

$invoker->run($argv[1]);

echo $receiver->getOutput();
