# Vehicloc - Projet d'initiation à Symfony
Ce projet est une application web simple de gestion de flotte de voitures de location (Vehicloc). Il a été développé dans le but de prendre en main les concepts fondamentaux du framework Symfony 6/7.

L'application couvre les fonctionnalités de base d'un CRUD (Create, Read, Update, Delete) sur une entité Car.

## 🚀 Démarrage rapide
Suivez ces instructions pour installer et lancer le projet sur votre machine locale.

## Prérequis
PHP 8.1 ou supérieur
Composer
Symfony CLI
Un serveur de base de données local (MAMP, WAMP, XAMPP, Docker...)

## Installation
### Clonez le projet
git clone https://votre-url-de-depot.git
cd vehicloc

### Installez les dépendances PHP
composer install

### Configurez la base de données
Copiez le fichier .env vers un fichier .env.local.
Ce nouveau fichier ne sera pas suivi par Git.
Modifiez la ligne DATABASE_URL dans votre .env.local pour correspondre à votre configuration locale. 

Exemple pour MAMP :
DATABASE_URL="mysql://root:root@127.0.0.1:8889/vehicloc?serverVersion=5.7&charset=utf8mb4"

## Créez et mettez à jour la base de données
### Créez la base de données
php bin/console doctrine:database:create

### Appliquez les migrations pour créer la structure des tables
php bin/console doctrine:migrations:migrate

## Chargez les données de test (Fixtures)
Pour peupler la base de données avec un jeu de voitures de démonstration, exécutez la commande suivante. Attention, cela purgera la base de données avant de la remplir. 

php bin/console doctrine:fixtures:load

## Lancez le serveur
Utilisez le serveur local de Symfony pour lancer l'application :
symfony server:start

Vous pouvez maintenant accéder à l'application dans votre navigateur à l'adresse indiquée (généralement http://127.0.0.1:8000).
