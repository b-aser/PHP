<?php

class Product
{
    public function __construct(
        public string $name,
        public float $price
    ) {}
 
    public function hasDiscount(): bool
    {
        return $this->price < 100;
    }
 
    public function getDescription(): string
    {
        return "{$this->name} costs {$this->price}€";
    }

    
}

class DigitalProduct extends Product{
    public function getLink(): string{
        return 'app-link';
    }
}

$product = new DigitalProduct("application", 899.99);
var_dump($product->hasDiscount());