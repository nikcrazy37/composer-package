<?php

declare(strict_types=1);

namespace Nikcrazy37\ComposerPackage;

class StringRedactor
{
    /**
     * @param string $string
     * @return string
     */
    public function setUpper(string $string): string
    {
        return strtoupper($string);
    }
}