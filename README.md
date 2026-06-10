# Mini Symfony Learning

Projet pédagogique réalisé dans le cadre de l'apprentissage de : 

- PHP Orienté Objet 
- MVC
- Router
- Front Controller 
- PDO
- Git & Github 
- Préparation à symfony

--- 

## Objectif

Comprendre les mécanismes internes d'un framework moderne avant l'apprentissage de Symfony

---

## Architecture

```text
app/
    Controlers/
    Models/
    Views/

core/
config/
public/
```

---

## Module 1 - Front Controller et Router 

- Comprendre le rôle du Front Controller
- Utiliser $_SERVER['REQUEST_URI']
- Créer une classe router
- Créer un objet avec new
- Utiliser une méthode de classe
- Créer des routes avec switch
- Comprendre le cycle d'une requête web 

### Cycle d'une requête 

        Utilisateur
            ↓
        Navigateur
            ↓
        Apache
            ↓
        public/index.php
            ↓
        Router
            ↓
        Page affichée


---

## Auteur

Christophe Lenoir
Projet de formation personnelle 2026.
