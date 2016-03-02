<?php

echo "post...\n";
print_r($_POST);

echo "\njson...\n";
$inputJSON = file_get_contents('php://input');
$input= json_decode( $inputJSON, TRUE ); //convert JSON into array

echo "going to write log...\n";
file_put_contents("php://stderr", "&&&\n");
file_put_contents("php://stderr", $input);
echo "end write the log...";
