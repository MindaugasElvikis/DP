<?php

use App\Human;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Human::getHuman();
        $secondCall = Human::getHuman();

        $this->assertInstanceOf(Human::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }

    /**
     * @ExpectsException
     */
    public function testConstructor()
    {
        try {
            $human = new Human(1, 2);
            $this->assertTrue(false);
        } catch (\Throwable $exception) {
            if ($exception instanceof \PHPUnit\Framework\ExpectationFailedException) {
                throw $exception;
            }
            $this->assertTrue(true);
        }
    }

    /**
     * @ExpectsException
     */
    public function testClone()
    {
        try {
            $human = Human::getHuman();
            $human2 = clone $human;
            $this->assertTrue(false);
        } catch (\Throwable $exception) {
            if ($exception instanceof \PHPUnit\Framework\ExpectationFailedException) {
                throw $exception;
            }
            $this->assertTrue(true);
        }
    }

    /**
     * @ExpectsException
     */
    public function testWakeUp()
    {
        try {
            $human = Human::getHuman();
            $serialized = serialize($human);
            $human2 = unserialize($serialized);
            $this->assertTrue(false);
        } catch (\Throwable $exception) {
            if ($exception instanceof \PHPUnit\Framework\ExpectationFailedException) {
                throw $exception;
            }
            $this->assertTrue(true);
        }
    }
}
