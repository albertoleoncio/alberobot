<?php

declare(strict_types=1);

namespace App\Application;

interface ParserInterface
{
    public function parse($cases): string;
}
