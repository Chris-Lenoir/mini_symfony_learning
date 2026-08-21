<?php 
// Le travail du router est de recevoir l'URL et là il choisit le controler
class router 
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function dispatch(string $url): void {
        switch($url) {
            case '/':
                $controller = new HomeController($this->pdo);
                $controller->index();
                break;

            case '/contact':
                $controller = new ContactController();
                $controller->index();
                break;

            case '/products':
                $controller = new ProductController($this->pdo);
                $controller->index();
                break;

            default:
                echo '404 - Page Introuvable';
        }
    }
}