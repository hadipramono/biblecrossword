<?php

$contents = file_get_contents("https://API_AKSES_CHATGPT");

$myfile = fopen("./data/gpt.json", "w") or die("Unable to open file!");
fwrite($myfile, $contents);
fclose($myfile);
