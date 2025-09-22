<?php

namespace App\Models\UsersModel ;

use \PDO;

function findOneByEmailAndPassword (PDO $connection, array $data){
    $sql = "SELECT *
            FROM users
            WHERE email = :email;";

    $rs = $connection->prepare($sql);
    $rs->bindValue(':email', $data['email'], PDO::PARAM_STR);
    $rs->execute();
    $user = $rs->fetch(PDO::FETCH_ASSOC);
    return password_verify($data['password'], $user['password'])?  $user : false; //Si argument 1 = argument tu return $user sinon false

}