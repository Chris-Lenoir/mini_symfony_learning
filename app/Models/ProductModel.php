<?php 

class ProductModel 
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {
       $stmt = $this->pdo->query('SELECT * FROM products');

       $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

       return $products;
    }
}