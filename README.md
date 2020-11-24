git git@github.com:DmitriyRudenskiy/tutorial_type_php.git
cd tutorial_type

# переименуйте main_empty.php в main.php, внесите правки и запустите авто проверку

# используя Docker
docker run -it --rm --name tutorial-php -v "$PWD":/var/www -w /var/www php:7.4-cli php tests/main_test.php

# или из консоли
php tests/main_test.php