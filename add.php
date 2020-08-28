<?php require('data/model.php');


// 
$tt = $_POST['task'];
$dc = $_POST['desk'];
Model::insert($tt,$dc);
// if ( $tt || $dc  == ''){
//     echo 'Данные не все заполнены';
//     exit();
// }else {

// }


    

// var_dump($task);
// var_dump($desc);

// require ('data/model.php');
// require ('data/db.php');
// use devsite\data\model;
// use devsite\data\db;