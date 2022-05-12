<?php

require './models/database.php';



function getLastArticles(int $nb):array
{
    $sql = "SELECT * FROM articles ORDER BY created_at DESC LIMIT :nb";
    $query = dbConnect()->prepare($sql);
    $query->bindValue('nb', $nb, PDO::PARAM_INT);
    $query->execute();
    $articles = $query->fetchAll();
    $query->closeCursor();
    return $articles;
}


function getArticles():array
{
    $sql = "SELECT * FROM articles" ;
    $query = dbConnect()->prepare($sql);
    $query->execute();
    $articles = $query->fetchall();
    $query->closeCursor();
    return $articles;
}

function getArticle($id)
{
    $sql = "SELECT * FROM articles WHERE id = :id";
    $query = dbConnect()->prepare($sql);
    $query->bindValue('id', $id, PDO::PARAM_INT);
    $query->execute();
    $articles = $query->fetch();
    $query->closeCursor();
    return $articles;
}