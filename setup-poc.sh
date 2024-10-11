#!/bin/bash

# Vérification de l'installation de DDEV
if ! command -v ddev &> /dev/null
then
    echo "DDEV n'est pas installé. Veuillez l'installer avant de continuer."
    exit 1
fi

# Définition des variables
PROJECT_NAME="vnf-recrutement-poc"
WORDPRESS_VERSION="latest"
SITE_URL="https://vnf-recrutement-poc.ddev.site"

# Création du projet DDEV
ddev config --project-type=wordpress --docroot=wordpress --create-docroot
ddev start

# Installation de WordPress
ddev wp core download --version=$WORDPRESS_VERSION
ddev wp config create --dbname=db --dbuser=db --dbpass=db --dbhost=db
ddev wp core install --url=$SITE_URL --title="VNF Recrutement POC" --admin_user=admin --admin_password=password --admin_email=admin@example.com

# Installation et activation du thème Twenty Twenty-Four (compatible Gutenberg)
ddev wp theme install twentytwentyfour --activate

# Installation et activation de plugins utiles pour le POC
ddev wp plugin install gutenberg --activate
ddev wp plugin install wordpress-seo --activate
ddev wp plugin install contact-form-7 --activate

# Création d'une page d'exemple pour les offres d'emploi
ddev wp post create --post_type=page --post_title='Offres d'emploi' --post_status=publish --post_content='<!-- wp:paragraph --><p>Bienvenue sur notre page d'offres d'emploi.</p><!-- /wp:paragraph --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading --><h2>Offre 1</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Description de l'offre 1</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading --><h2>Offre 2</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Description de l'offre 2</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns -->'

echo "Installation terminée. Vous pouvez accéder à votre site à l'adresse : $SITE_URL"
echo "Nom d'utilisateur admin : admin"
echo "Mot de passe admin : password"
