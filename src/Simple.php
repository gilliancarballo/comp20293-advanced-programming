<?php
class Simple
{
    private $number;

    public function __construct($number) // 10
    {
        $this->number = $number;
    }

    public function divide($divisor) // 2
    {
        if (empty($divisor)) {
            throw new \InvalidArgumentException('Divisor must be a number or > 0');
        }

        return $this->number / $divisor; // 5
    }
}