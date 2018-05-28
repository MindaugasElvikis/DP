<?php

namespace App\Composite;

/**
 * Trait HasClass
 */
trait HasClass
{
    private $classess = [];

    public function appendClass($pattern)
    {
        return sprintf($pattern, implode(' ', $this->getClassess()));
    }

    /**
     * @return array
     */
    public function getClassess()
    {
        return $this->classess;
    }

    /**
     * @param array $classess
     */
    public function setClassess(array $classess)
    {
        $this->classess = $classess;

        return $this;
    }
}
