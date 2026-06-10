<?php 

class router {
    public function dispatch(string $url): void 
    {
        switch ($url) {
            case '/':
                echo 'Page Accueil';
                break;

                case '/contact':
                    echo 'Page Contact';
                    break;

                    case '/users':
                        echo 'Page Utilisateurs';
                        break;

                        default:
                        echo '404 - Page introuvable';
        }
    }
}