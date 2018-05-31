<?php

namespace App\Command;

/**
 * Class Invoker.
 */
class Invoker
{
    /**
     * @var CommandInterface[]|array
     */
    private $commands;

    /**
     * @var Receiver
     */
    private $receiver;

    /**
     * Invoker constructor.
     *
     * @param Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @param array|string[]
     */
    public function setCommands(array $commands)
    {
        foreach ($commands as $key => $command) {
            $newCommand = new $command($this->receiver);

            if ($newCommand instanceof CommandInterface) {
                $this->commands[$key] = $newCommand;
            }
        }
    }

    /**
     * @return void
     */
    public function run(string $commandType)
    {
        try {
            $this->getCommand($commandType)->execute();
        } catch (\Exception $exception) {
            $this->receiver->writeLn($exception->getMessage());
        }
    }

    /**
     * @param string $commandType
     *
     * @return CommandInterface
     *
     * @throws \Exception
     */
    private function getCommand(string $commandType): CommandInterface
    {
        if (
            isset($this->commands[$commandType]) &&
            $this->commands[$commandType] instanceof CommandInterface
        ) {
            return $this->commands[$commandType];
        }

        throw new \Exception('Tokia komanda neegzistuoja');
    }
}
