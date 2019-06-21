<?php

namespace structural\facade;

interface OsInterface
{
    public function halt();

    public function getName(): string;
}
