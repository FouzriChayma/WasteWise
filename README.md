Gestion des Utilisateurs dans notre Site de Recyclage
Introduction:
Dans notre site de recyclage, la gestion des utilisateurs est une composante essentielle pour offrir une expérience personnalisée et sécurisée à nos utilisateurs. Ce document vise à fournir une vue d'ensemble de la manière dont nous gérons les utilisateurs dans notre application.


Entité Utilisateur (User)
L'entité utilisateur (User) est au cœur de notre système. Chaque utilisateur enregistré sur notre plateforme possède un compte utilisateur unique qui lui permet d'accéder aux fonctionnalités et aux ressources disponibles.

Attributs de l'Entité Utilisateur
ID Utilisateur (UserID) : Identifiant unique attribué à chaque utilisateur lors de son inscription.

Name 


Last Name


Nom d'Utilisateur (Username) : Nom choisi par l'utilisateur pour son compte.


Adresse Email (Email Address) : Adresse email de l'utilisateur, utilisée pour l'authentification et la communication.


Mot de passe (Password) : Mot de passe sécurisé utilisé pour protéger l'accès au compte utilisateur.

Role


Date De Naissance


Fonctionnalités Principales:

Inscription : Permet aux utilisateurs de créer un compte en fournissant leurs informations de base.

Connexion : Authentification sécurisée des utilisateurs avec leur nom d'utilisateur et leur mot de passe.

Profil Utilisateur : Accès aux informations personnelles et possibilité de les modifier.

Mot de Passe Oublié : Réinitialisation sécurisée du mot de passe via un lien envoyé par email.

Gestion des Sessions : Suivi et gestion des sessions utilisateur pour assurer la sécurité.

Gestion des Comptes : Possibilité de mettre à jour les informations du compte et de le supprimer.
Sécurité

Cryptage des Mots de Passe : Stockage sécurisé des mots de passe à l'aide de fonctions de hachage.

Protection contre les Attaques : Limitation des tentatives de connexion et prévention des attaques par injection SQL.
Sécurité des Sessions : Utilisation de jetons d'authentification sécurisés et de mécanismes de validation des sessions.
