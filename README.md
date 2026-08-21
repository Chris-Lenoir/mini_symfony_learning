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
            Exemple : class Router {}

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


Classe => Modèle ou plan permettant de créer des objets. Une classe peut contenir des propriétés et des méthodes.

            Exemple :

            class Router
            {
                public function dispatch($url)
                {
                }
            }

            Ici, Router est la classe.


Objet => Instance concrète créée à partir d'une classe.

            Exemple :

            $router = new Router();

            Ici, $router est un objet de la classe Router.


Instanciation => Action de créer un objet à partir d'une classe grâce au mot-clé new.

            Exemple :

            $router = new Router();

            Router = la classe
            new Router() = l'instanciation
            $router = l'objet créé


Méthode => Fonction déclarée à l'intérieur d'une classe. Elle représente une action que l'objet peut effectuer.

            Exemple :

            class Router
            {
                public function dispatch($url)
                {
                }
            }

            Ici, dispatch() est une méthode.

            Pour l'utiliser :

            $router->dispatch($url);


Héritage => Mécanisme permettant à une classe de récupérer les propriétés et méthodes d'une autre classe.

            L'héritage utilise le mot-clé extends.

            Exemple :

            class Controller
            {
                public function render()
                {
                }
            }

            class HomeController extends Controller
            {
            }

            Ici, HomeController hérite de Controller.
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
