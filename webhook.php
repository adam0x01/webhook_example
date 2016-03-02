<?php
print_r($_POST);

echo "going to write log...";
$myfile = fopen("./log.html", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $_POST);
fclose($myfile);
echo "end write the log...";
