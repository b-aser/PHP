<?php


class Product{
    public function __construct(
        public string $name,
        public ?float $price = null,
        public ?float $beforePrice = null,
        public ?float $afterPrice = null,
    ){}
}
