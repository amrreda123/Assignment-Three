<?php
declare(strict_types=1);
class Circle
{
    private float $radius;
    private string $color;

    public function __construct(float $radius = 0, string $color = "unknown")
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius(): float
    {
        return $this->radius;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
    public function getCircumference(): float
    {
        return 2 * pi() * $this->radius;
    }
    public function __toString()
    {
        return "Circle[radius=" . $this->radius . ", color=" . $this->color . "]";
    }
}
?>