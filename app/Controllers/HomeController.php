<?php

class HomeController{
    public function index(): void{
        $title = 'Accueil';
        $description = 'Bienvenue sur Mini Symfony Learning'; 
        $year = 2026;
        $products = [
            'Clavier',
            'Souris',
            'Écran',
        ];
        require_once __DIR__ . '/../Views/home.php';
    }
}