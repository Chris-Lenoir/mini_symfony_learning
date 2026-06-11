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

## Glossaire - Mini Symfony Learning

MVC => Architecture séparant les responsabilités d'une application. 

Model => Comunique avec la base de données.

View => Affiche le HTML. 

Controller => Coordonne les traitements.

Front Controller => Point d'entrée unique de l'application .
            Dans notre projet : public/index.php ---> Toutes les requêtes passent par lui 

Router => Composant chargé d'analyser l'URL et de choisir quel Controller doit être exécuté.
            Exemple : /contact -> ContactController

Classe => Plan de fabrication d'un objet.
            Exemple : class router {}

Objet => Instance créee à partir d'une classe.
            Exemple : $router = new router();

Variable => Conteneur permettant de stocker une valeur.
            Exemple : $url = "/contact"; ou $router = new Router();

Méthode => Fonction appartenant à une classe. 
            Exemple : $router->dispatch($url); 
                La méthode est dispatch()

$_SERVER => Supergloblale PHP contenant des informations sur la requête et le serveur.

REQUEST_URI => Valeur contenue dans : $_SERVER['REQUEST_URI]
        Permet de récupérer l'URL demandée par l'utilisateur.
            Exemple : /contact

REQUIRE_ONNCE '../core/Router.php';

---

## Questions Fréquentes

## Responsabilité MVC

### Router 
        Analyse l'URL et choisit le Controller à exécuter.
            exemple: /contact ->ContactController

### Controler
        Traite la demande, prépare les données et appelle la view. Il ne doit pas contenir le HTML de la page

### Model
        Commmunique avec la base de données. Il récpuère, ajoute, modifie ou supprime les données.

### View Contient le HTML affiché à l'utilisateur.
        Elle ne doit pas gérer la logique métier ni accéder directement à la base de données.


---

## Module 1 - Front Controller et Router 

- Comprendre le rôle du Front Controller
- Utiliser $_SERVER['REQUEST_URI']
- Créer une classe router
- Créer un objet avec new
- Utiliser une méthode de classe
- Créer des routes avec switch
- Comprendre le cycle d'une requête web 

    ## Schémas importants
    
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
            Controller
                ↓
            Model
                ↓
            View
                ↓
            HTML
                ↓
            Navigateur


    ### Architecture MVC 

            Model
                ↓
            Accès aux données

            Controller
                ↓
            Traitement de la demande
                ↓
            View
                ↓
            Affichage HTML


---

## Auteur

Christophe Lenoir
Projet de formation personnelle 2026.
