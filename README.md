🌱 WasteWise – Application Web de Gestion Durable des Déchets

WasteWise est une application web intelligente développée pour moderniser la gestion des déchets dans les villes et quartiers.
Elle vise à sensibiliser les citoyens au recyclage, améliorer la communication avec les associations et optimiser la collecte via une interface moderne, ergonomique et multi-rôles.

✨ Fonctionnalités principales

♻️ Sensibilisation au recyclage
Informations sur les bonnes pratiques environnementales.

🗑️ Déclarations de déchets
Les citoyens peuvent déposer des demandes de collecte ou signaler un dépôt sauvage.

🗂️ Gestion intelligente
Gestion des catégories de déchets, zones, itinéraires et points de tri.

📊 Dashboard pour admin & associations
Visualisation des demandes, statistiques & suivi en temps réel.

👥 Multi-rôles
Citoyen, Admin, Association, Driver, Visiteur.

🔐 Authentification sécurisée (Symfony Security)
Gestion des accès basée sur les rôles.

🎯 Objectif général

L’objectif de WasteWise est de digitaliser la gestion des déchets afin de :

Encourager le recyclage et les comportements responsables

Réduire les dépôts sauvages

Optimiser le tri, la collecte et le transport

Faciliter la communication entre citoyens, associations et collecteurs

Construire un écosystème écologique moderne et efficace

🧩 Objectifs Fonctionnels

Dépôt d’une demande de collecte

Informations pédagogiques sur le recyclage

Dashboard pour admins/associations

Gestion des zones, catégories, types de déchets

Gestion des itinéraires et des chauffeurs

🛠️ Objectifs Techniques

FrontOffice moderne et responsive

BackOffice complet avec statistiques

Architecture MVC (Symfony)

Sécurité renforcée & gestion des rôles

Base de données MySQL optimisée

🧬 Architecture du projet

Backend : Symfony (PHP)

Frontend : HTML / CSS / JavaScript

Base de données : MySQL

Architecture : MVC

Conception : Diagrammes UML, maquettes (Figma / Adobe XD)

🖥️ Aperçus & Visuels

Voici quelques visuels représentatifs de l’application :

Diagrammes de cas d’utilisation

Diagramme de classes

Interfaces de connexion / inscription

Dashboard FrontOffice & BackOffice

(Les images sont disponibles dans le dossier img/)

🚀 Installation
1️⃣ Cloner le projet
git clone <url_du_repo>
cd WasteWise

2️⃣ Installer les dépendances
composer install

3️⃣ Configurer la base de données

Dans le fichier .env :

DATABASE_URL="mysql://user:password@127.0.0.1:3306/wastewise"

4️⃣ Créer la base & migrations
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

5️⃣ Lancer le serveur Symfony
symfony server:start

🔧 Contributions (réalisées)
Contributions techniques

Refactorisation MVC

Sécurisation des accès (rôles, permissions)

Optimisation des requêtes SQL

Implémentation du BackOffice complet

Ajout des notifications & alertes

Contributions UI/UX

Maquettes complètes (Figma / Adobe XD)

Amélioration de la navigation utilisateur

Design moderne & responsive

Contributions documentaires

Documentation d’installation

Diagrammes UML

Guide utilisateur détaillé

Contributions futures possibles

IA pour la reconnaissance de déchets

Gamification (récompenses pour recycler)

API mobile Android / iOS

Statistiques avancées interactives
