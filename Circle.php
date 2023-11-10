<?php

declare(strict_types=1);

interface Shape
{
    public function setName(string $name): void;
    public function getName(): string;
    public function setDimensions(float $r): void;
    public function getDimensions(): array;
    public function calculateArea(): void;
    public function getArea(): float;
    public function calculateCircumference(): void;
    public function getCircumference(): float;
}

class Circle implements Shape
{
    private float $r;
    private string $name;
    private float $area;
    private float $circumference;

    public function __construct(float $r, string $name)
    {
        $this->setName($name);
        $this->setDimensions($r);
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setDimensions(float $r): void
    {
        $this->r = $r;
        $this->calculateArea();
        $this->calculateCircumference();
    }

    public function getDimensions(): array
    {
        return ['r' => $this->r];
    }

    public function calculateArea(): void
    {
        $this->area = (float) (\pi() * pow($this->r, 2));
    }

    public function getArea(): float
    {
        return $this->area;
    }

    public function calculateCircumference(): void
    {
        $this->circumference = (float) (2 * \pi() * $this->r);
    }

    public function getCircumference(): float
    {
        return $this->circumference;
    }

    public function printInfo(): void
    {
        echo "Name:" . $this->name . PHP_EOL;
        echo "r:" . $this->r . PHP_EOL;
        echo "Area:" . $this->area . PHP_EOL;
        echo "Circumference:" . $this->circumference . PHP_EOL;
    }
}

$circle = new Circle(5.0, 'circle1');
$circle->printInfo();
?>
