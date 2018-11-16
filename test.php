<?php

use IutLens\Tache\Singleton\Blade;

require "vendor/autoload.php";

$donnees_json = <<<EOD
[ {
"nom": "Duchmol",
"prenom": "Robert",
"tel": "00 00 00 00 01"
}, {
"nom": "Martin",
"prenom": "Gérard",
"tel": "00 00 00 00 02"
}, {
"nom": "Laporte",
"prenom": "Julie",
"tel": "00 00 00 00 03"
}
]
EOD;

$contacts = json_decode($donnees_json);

echo Blade::getBlade()->run("contacts", array("contacts" => $contacts));