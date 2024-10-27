# NetControl-ESTM

![Logo de l'ESTM](public/images/ESTM.webp)

**NetControl-ESTM** est une application web conçue pour la gestion des réseaux de l'École Supérieure de Technologie et de Management (ESTM). Elle offre une interface utilisateur alternative à celle d'UniFi, permettant le management d'un parc de dispositifs réseau Ubiquiti (USG Pro 4, points d'accès, etc.) via une interface Laravel complète.

Cette application s'adresse aux administrateurs réseaux souhaitant surveiller et configurer leur réseau avec plus de flexibilité et d'options de personnalisation.

---

## Fonctionnalités

- **Gestion du réseau** : Vue centralisée pour surveiller les équipements et configurer les règles de sécurité, les VLANs, etc.
- **Rapports en temps réel** : Visualisation des statistiques réseau.
- **Authentification sécurisée** : Authentification et gestion des utilisateurs avec Laravel Breeze.
- **Interface moderne** : Utilisation de Tailwind CSS et Flowbite pour une interface intuitive et réactive.

## Prérequis

Pour utiliser ou contribuer à ce projet, assurez-vous de disposer des versions logicielles suivantes :

- **Laravel** : 11.28.0
- **PHP** : 8.2.6
- **Tailwind CSS** : ^3.4.14
- **Laravel Livewire** : v3.5.12
- **Laravel Breeze** : ^2.2
- **Flowbite** : ^2.5.2

De plus, vous aurez besoin d'une **clé API UniFi** valide pour accéder aux équipements réseau Ubiquiti.

## Installation

1. **Clonez le dépôt :**

   ```bash
   git clone https://github.com/votre-utilisateur/NetControl-ESTM.git
   cd NetControl-ESTM
   ```

2. **Installez les dépendances Composer et NPM :**

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Configurez l'environnement :**

   Copiez le fichier `.env.example` en `.env`, et définissez les paramètres nécessaires pour la connexion à la base de données PostgreSQL, la clé API UniFi, et les informations d'authentification.

   ```bash
   php artisan key:generate
   ```

4. **Effectuez les migrations de la base de données :**

   ```bash
   php artisan migrate
   ```

5. **Lancez le serveur de développement :**

   ```bash
   php artisan serve
   ```

L'application est maintenant accessible sur `http://localhost:8000`.

---

## Contributions

Pour contribuer à ce projet, veuillez consulter les fichiers [CONTRIBUTING.md](CONTRIBUTING.md) et [CODE_OF_CONDUCT.md](CODE_OF_CONDUCT.md).

---

## Sécurité

Merci de signaler tout problème de sécurité à l'ESTM en suivant le fichier [SECURITY.md](SECURITY.md).

---

## Licence

Ce projet est sous licence MIT. Voir [LICENSE](LICENSE) pour plus de détails.
