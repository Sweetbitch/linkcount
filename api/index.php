{"filelinks":{"all":113,"direct":113,"indirect":0},"categorylinks":null,"wikilinks":{"all":95,"direct":95,"indirect":0},"redirects":0,"transclusions":{"all":0,"direct":0,"indirect":0}}<?php

require '../vendor/autoload.php';

if ($_SERVER['QUERY_STRING']) {
	die((new LinkCount($_GET['page'] ?? '', $_GET['project'] ?? '', $_GET['namespaces'] ?? ''))->json());
}

echo APIHelp::html();

