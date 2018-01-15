
# Mon CV sous Symfony avec Sonata et Doctrine

Le site se compose en 3 parties: 
- la Homepage avec mon cv
- la page Blog avec l'affichage de tout mes articles
- et les articles

Sur la Homepage il y a ma présentation avec une possibilité de télécharger un cv au format pdf. \
Il y a mon parcours, scolaire et mon expérience. Il y a mes compétence sous forme de graphique. \
Il y a aussi les 3 articles les plus récent qui ont été posté. 

Il y a également toute une interface de login et pour s'enregistrer.

Les éléments du cv ainsi que les blogs sont administrable via le role de super_admin 

# Pour que le projet fonctionne il faut d'abord : 
- Cloner le repo dans votre dossier /www 
- Ensuite vous exporter le fichier projetsymfony.sql dans phpmyadmin cela vous créera la base de donnée avec les admins et les articles déjà à l'intérieur
- Installer [Composer](https://getcomposer.org/download/) si ce n'est pas déja fait
- Avec un invite de commande rendez vous dans le dossier /SiteCV cloné à l'instant 
- Effectuez la commande `composer install`
- Renseignez les valeur que Composer vous demande 


