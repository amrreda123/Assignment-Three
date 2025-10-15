<?php

declare(strict_types=1);
class InvoiceItem
{
    private string $id;
    private string $desc;
    private int $qty;
    private float $unitPrice;
    public function __construct(string $id, string $desc, int $qty, float $unitPrice)
    {
        $this->id = $id;
        $this->desc = $desc;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDesc(): string
    {
        return $this->desc;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function setDesc(string $desc): void
    {
        $this->desc = $desc;
    }

    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }

    public function setUnitPrice(float $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    public function getTotal(): float
    {
        return $this->qty * $this->unitPrice;
    }
    public function __toString(): string
    {
        return "InvoiceItem[id=" . $this->id . ", desc=" . $this->desc . ", qty=" . $this->qty . ", unitPrice=" . $this->unitPrice . "]";
    }
}
