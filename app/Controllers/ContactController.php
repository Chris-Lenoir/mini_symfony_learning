<?php 

class ContactController{
    public function index(): void 
    {
        $title = 'Contact';

        require_once __DIR__ . '/../Views/contact.php';
    }
}