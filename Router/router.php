<?php 

function vd($str){
    var_dump($str);
};



if(isset($_GET['page'])){

    $page= $_GET['page'];

    switch ($page) {

        case 'accueil':
            require './controllers/homeController.php';
            break;
            
            
        case 'contact':
            require './controllers/contactController.php';
            break;

            case 'about':
                require './controllers/aboutController.php';
                break;

        default:
            header('Location: index.php?page=accueil');
            break;
    }



} else {
    header('Location: index.php?page=accueil');
}