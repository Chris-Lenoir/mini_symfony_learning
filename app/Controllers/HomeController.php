<?php

class HomeController
{
    
    public function index(): void
    {
        $title = 'Accueil';
        $description = 'Bienvenue sur Mini Symfony Learning'; 
        $year = 2026;
    
        require_once __DIR__ . '/../Views/home.php';
    }
}