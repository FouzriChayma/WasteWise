# 🌱 WasteWise – Application Web de Gestion Durable des Déchets

WasteWise est une application web moderne et intelligente pensée pour améliorer
la gestion des déchets en ville, encourager le recyclage et faciliter la communication
entre citoyens, associations et responsables de collecte.  
Le projet applique les bonnes pratiques d’ingénierie logicielle : architecture MVC,
interfaces responsives, gestion multi-rôles et modules extensibles.

---

## 🧭 Sommaire

1. 🌍 Présentation générale  
2. 🎯 Objectifs du projet  
3. 🧩 Fonctionnalités  
4. 🛠️ Technologies utilisées  
5. 🖥️ Aperçu & visuels  
6. 🚀 Installation (Guide complet)  
7. 📘 Documentation & conception  
8. 🔧 Contributions (ce que tu as réalisé)  
9. 🚀 Idées d’amélioration futures  
10. 👩‍💻 Auteur  
11. 📄 Licence  

---

# 🌍 1. Présentation générale

**WasteWise** digitalise la gestion des déchets pour créer un environnement propre,
éco-responsable et connecté.

L’application permet au citoyen de signaler, trier, déposer et suivre ses déchets.
Les associations et autorités locales disposent d’un tableau de bord complet
pour superviser les zones, collectes, véhicules et catégories de déchets.

---

# 🎯 2. Objectifs du projet

### 🎯 Objectif général
- Encourager les bonnes pratiques de recyclage  
- Sensibiliser à l’écologie via un outil interactif  
- Optimiser la collecte et réduire les dépôts sauvages  
- Digitaliser la communication entre acteurs : citoyen, admin, associations, drivers  

### 🧩 Objectifs fonctionnels
- Dépôt de demandes de collecte  
- Tableau de bord dynamique  
- Multi-rôles (Admin, Association, Driver, Citoyen)  
- Zones, déchets, catégories, itinéraires gérés depuis BackOffice  
- Notifications, suivi en temps réel  

### 🛠️ Objectifs techniques
- Architecture **MVC Symfony**  
- Base de données MySQL optimisée  
- FrontOffice + BackOffice responsives  
- Authentification sécurisée (Symfony Security)  
- Routage avancé, services & contrôleurs modulaires  

---

# 🧩 3. Fonctionnalités principales

- ♻️ **Gestion intelligente des déchets**
- 📝 Dépôt de collectes
- 🚚 Planification & suivi des tournées
- 🔐 Authentification multi-profils
- 📊 Dashboard complet pour admin/association
- 🌍 Carte des zones & localisations
- 🎨 Interfaces modernes & UI/UX optimisée

---

# 🛠️ 4. Technologies utilisées

| Catégorie | Technologies |
|----------|--------------|
| **Backend** | Symfony (PHP 8), Doctrine ORM |
| **Base de données** | MySQL |
| **Frontend** | HTML, CSS, JavaScript |
| **Architecture** | MVC |
| **Conception** | UML, Figma / Adobe XD |
| **Outils** | Composer, Symfony CLI |

---

# 🖥️ 5. Aperçu & Visuels

Le dossier `/img` contient :

- Diagrammes UML (cas d’utilisation, classes, acteurs)
- Maquettes Front/Back-office
- Interfaces Sign-in / Sign-up
- Aperçus des modules (citoyen, association, admin)

Voici quelques exemples :

### 🔹 Diagramme de cas d’utilisation
![Use Case](img/use case.png)

### 🔹 Diagramme de classes
![Classes](img/diag.png)

### 🔹 Interfaces Sign-in / Sign-up
![Sign in](img/signin.JPEG)
![Sign up](img/signup.JPEG)

---

# 🚀 6. Installation

### 1️⃣ Cloner le projet
```bash
git clone <url_du_repo>
cd WasteWise
composer install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
symfony server:start
