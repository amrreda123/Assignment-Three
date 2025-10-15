<?php
declare(strict_types=1);

class Rectangle{
    private float $width;
    private float $length;
    public function __construct(float $width, float $length) {
        $this->width = $width;
        $this->length = $length;
    }
    public function getWidth(): float {
        return $this->width;
    }
    public function getLength(): float {
        return $this->length;
    }
    public function setWidth(float $width): void {
        $this->width = $width;
    }
    public function setLength(float $length): void {
        $this->length = $length;
    }
    public function getArea(): float {
        return $this->width * $this->length;
    }
    public function getPerimeter(): float {
        return 2 * ($this->width + $this->length);
    }
    public function __toString(): string {
        return "Rectangle[width=" . $this->width . ", length=" . $this->length . "]";
    }
}

?>