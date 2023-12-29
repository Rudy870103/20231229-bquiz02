<?php include_once "db.php";

echo $User->count($_POST);

// $res=$User->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);

// echo $res;


// if($res>0){
//     echo 1;
// }else{
//     echo 0;
// }