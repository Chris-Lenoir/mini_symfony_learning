<?php 

class ProductModel 
{
    public function findAll(): array
    {
        $products = [
            'Clavier',
            'souris',
            'Écran',
        ];

        return $products;
    }
}