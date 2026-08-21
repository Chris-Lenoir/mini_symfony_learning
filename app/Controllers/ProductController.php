<?php 

class ProductController 
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function index(): void 
    {
        $productModel = new ProductModel($this->pdo);
        $products = $productModel->findAll();     
        
        require_once __DIR__ . '/../Views/products.php';
    }

}
