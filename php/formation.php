<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file("../YAML/formation.yaml");

echo "<h1>".$data["titre"]."</h1>\n";

?>