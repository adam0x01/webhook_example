<?php
print_r($_POST);

echo "going to write log...\n";
file_put_contents("php://stderr", "&&&\n");
file_put_contents("php://stderr", $_POST);
echo "end write the log...";
