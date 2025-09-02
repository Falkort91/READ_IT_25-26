<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connection, int $limit=10):array{
    $sql = "SELECT p.*
            FROM posts p
            ORDER BY created_at DESC
            LIMIT :limit;";
    $rs = $connection->prepare($sql); 
    $rs->bindValue(':limit',$limit,PDO::PARAM_INT) ;
    $rs->execute();               
    return $rs->fetchall(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connection, $id){
    $sql = "SELECT p.*
            FROM posts p
            WHERE id=:id;";
    $rs = $connection->prepare($sql); 
    $rs->bindValue(':id',$id,PDO::PARAM_INT) ;
    $rs->execute();               
    return $rs->fetch(PDO::FETCH_ASSOC);
}