<?php 
// Le travail du router est de recevoir l'URL et là il choisit le controler
class router {
    public function dispatch(string $url): void {
        switch($url) {
            case '/':
                $controller = new HomeController();
                $controller->index();
                break;

            case '/contact':
                $controller = new ContactController();
                $controller->index();
                break;

            default:
                echo '404 - Page Introuvable';
        }
    }
}