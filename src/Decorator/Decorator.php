<?php

namespace App\Decorator;

/**
 * Class Decorator.
 */
abstract class Decorator implements InputInterface
{
    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * Decorator constructor.
     *
     * @param InputInterface $input
     */
    public function __construct(InputInterface $input)
    {
        $this->input = $input;
    }

    /**
     * @return array|string
     */
    public function render()
    {
        if (is_array($this->input->render())) {
            $inputs = [];
            foreach ($this->input->render() as $data) {
                $inputs[] = '<input type="' . $this->getType() . '" name="' . $data . '"/>';
            }

            return implode('', $inputs);
        }

        return '<input type="' . $this->getType() . '" name="' . $this->input->render() . '"/>';
    }

    /**
     * @return string
     */
    abstract protected function getType(): string;
}
