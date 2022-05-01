<?php

$str = 'Hello Worldasdfasdfasdfasdffasd';
$encode = base64_encode($str);
$decode = base64_decode('SGVsbG8gV29ybGRhc2RmYXNkZmFzZGZhc2RmZmFzZA==');
echo $decode;