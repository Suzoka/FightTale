#  FightTale

## URL du site en ligne :
[https://fighttale.morganzarka.dev](https://fighttale.morganzarka.dev)

## Pour installer FightTale en local:

Installer le site en local :

- Installez XAMPP avec au minimum les modules Apache et MySQL.

- Ouvrez votre XAMPP et activer les serveurs Apache et MySQL.

- Ouvrir le dossier `htdocs`. (Dans XAMPP qui se trouve à la racine de votre disque).

- Déposer dans celui ci le dossier `fighttale` qui contient le code du site ainsi que le fichier de Base de Données.


## Pour installer la Base de Données en local :

- Dans la barre d'URL de votre navigateur, tapez : [localhost/phpMyAdmin](localhost/phpMyAdmin).

- Créez une nouvelle base de données, avec le nom que vous voulez.

- Allez ensuite dans l'onglet `Importer`.

- Sélectionnez le fichier `fighttale.sql` qui se trouve dans le dossier `fighttale`.

- Cliquez sur `Importer`, en bas de la page.

- Ouvrez le fichier `database-sample.php`, qui se trouve dans le dossier `scripts` du site, avec un éditeur de texte quelquonque.

- Modifiez les lignes 9 à 12 avec le serveur de base de donnée (normalement localhost en local), le nom d'utilisateur phpMyAdmin, le mot de passe de l'utilisateur, et enfin le nom de la base de donnée que vous venez de créer.

- Renommez le fichier `database-sample.php` en `database.php`.


## Aller sur le site :

- Allez à l'adresse [localhost/fighttale/index.html/](localhost/fighttale/index.html/) dans votre navigateur pour arriver sur le site.

- La page d'accueil du site s'ouvrira.
