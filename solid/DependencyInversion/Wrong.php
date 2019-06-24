<?php

namespace solid\DependencyInversion;

class Computer
{
    public function on()
    {
    }
}

class Button
{
    /**
     * @var Computer
     */
    private $computer;

    public function activate()
    {
        if (condition) { //some condition
            $this->computer->on();
        }
    }
}
