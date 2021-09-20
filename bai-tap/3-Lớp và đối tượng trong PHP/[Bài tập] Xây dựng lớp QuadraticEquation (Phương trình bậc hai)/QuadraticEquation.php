<?php

use JetBrains\PhpStorm\Pure;

class QuadraticEquation
{
    private int $a;
    private int $b;
    private int $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function getB(): int
    {
        return $this->b;
    }

    public function getC(): int
    {
        return $this->c;
    }

    #[Pure] public function getDiscriminant(): float|object|int
    {
        return pow($this->getB(), 2) - 4 * $this->getA() * $this->getC();
    }

    #[Pure] public function getRoot1(): float|int
    {
        return (-$this->getB() + sqrt($this->getDiscriminant())) / 2 * $this->getA();
    }

    #[Pure] public function getRoot2(): float|int
    {
        return (-$this->getB() - sqrt($this->getDiscriminant())) / 2 * $this->getA();
    }
}