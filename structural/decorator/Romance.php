<?php

namespace structural\decorator;

class Romance extends AbstractDecorator
{

    public function getFemale()
    {
        return $this->norvel->getFemale() + 5;
    }
}