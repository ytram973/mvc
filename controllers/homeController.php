<?php

require './models/articleManager.php';


$articles = getLastArticles(3);
var_dump($articles);
$template ='home';
$seo =[
    
'title'=> 'Accueil',

'description' => "alor la fpka,fpaz,fpaz,fpz,fpazk,fpaf,pazf,azpofo,p"
];


require './views/layout.php';
