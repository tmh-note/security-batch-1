<?php

$password = 'my-password';
// $hash = md5($password); // bedc452793b9d8fb2de4b26256759777
// $hash = sha1($password); // edbd5e119f94badb9f99a67ac6ff4c7a5204ad61
// $hash = hash('sha256', $password); //6fa2288c361becce3e30ba4c41be7d8ba01e3580566f7acc76a7f99994474c46
// if($hash == '6fa2288c361becce3e30ba4c41be7d8ba01e3580566f7acc76a7f99994474c46') {
//     echo 'login success';
// } else {
//     echo 'login failed.';
// }

$hash = password_hash($password, PASSWORD_BCRYPT); // $2y$10$2U4E7/HoCA7K6winjp1L1e8Z90THmklsJAj.m8Anl.buozgTrNlDm

if(password_verify($password, $hash)) {
    echo 'login success';
} else {
    echo 'login failed.';
}



/*
Hashing
md5 -> length - 32
sha1 -> length - 40
sha256 -> length - 64
bcrypt -> length - 60
*/
