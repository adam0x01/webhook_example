<?php

echo "post...\n";

// Coz aftership webhook send post request with 'Content-Type: application/json' header, $_POST can't get the post body.
// http://stackoverflow.com/questions/2731297/file-get-contentsphp-input-or-http-raw-post-data-which-one-is-better-to
// try this method
echo "\njson...\n";
$inputJSON = file_get_contents("php://input");
$input= json_decode( $inputJSON, TRUE ); //convert JSON into array

// $entityBody = stream_get_contents(STDIN);

echo "going to write log...\n";
file_put_contents("php://stderr", "&&&\n");
file_put_contents("php://stderr", $input);
echo "end write the log...";
