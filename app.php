<?php

$data = "data.1=". mt_rand();

header("Content-Type: text/plain");
echo $data;

exit;
//eof
