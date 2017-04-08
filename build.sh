./bin/pdepend --summary-xml=/home/ci/build/pdepend.xml /home/ci/project
./bin/php-cpd --log-pmd=/home/ci/build/pmd-cpd.xml /home/ci/project
./bin/phpmd /home/ci/project xml codesize,unusedcode,naming,design --reportfile /home/ci/build/phpmd.xml --suffixes php
./bin/security-checker security:check --format=json /home/ci/project/composer.lock > /home/ci/bild/seurity.json
./bin/phpcs --report=checkstyle /home/ci/project > /home/ci/build/phpcs.xml
./bin/phploc --log-xml=/home/ci/build/phploc.xml /home/ci/project
./bin/sami.php update conf/sami.php

