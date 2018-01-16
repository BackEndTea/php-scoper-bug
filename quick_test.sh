php php-scoper/bin/php-scoper add-prefix vendor src more --output-dir=build-prefixed --force --prefix=Mutant
composer dump-autoload --working-dir=build-prefixed/ --classmap-authoritative --no-dev
php build-prefixed/src/main.php