<?php

declare(strict_types=1);

namespace Nikcrazy37\ComposerPackage;

use \Exception;

class StringRedactor
{
    /**
     * @var string $string
     */
    public string $string;

    /**
     * @param string $string
     */
    public function __construct(string $string = '')
    {
        $this->setString($string);
    }

    /**
     * @param $string
     * @return void
     */
    public function setString($string)
    {
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function setUpper(): string
    {
        try {
            if (empty($this->string)) {
                throw new Exception('Пустая строка. Задайте значение строки');
            }

            return strtoupper($this->string);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}