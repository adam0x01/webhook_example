<?php

echo "post...\n";
print_r($_POST);

echo "\njson...\n";
// $inputJSON = file_get_contents('php://input');
// $input= json_decode( $inputJSON, TRUE ); //convert JSON into array

$entityBody = stream_get_contents(STDIN);

echo "going to write log...\n";
file_put_contents("php://stderr", "&&&\n");
file_put_contents("php://stderr", $entityBody);
echo "end write the log...";
