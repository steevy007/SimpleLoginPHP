<?php
require_once 'connexionBD.php';
if(!function_exists('connectUser')){
    function connectUser($code,$password){
        $conn=connect();
        try{
            $req=$conn->prepare("select * from users where code_user=? and password=? LIMIT 1");
            $req->execute([
                $code,$password
            ]);
            if($req and $req->rowCount()==1){
                $data=$req->fetch(PDO::FETCH_OBJ);
                $_SESSION['code']=$data->code_user;
                $_SESSION['password']=$data->password;
                $_SESSION['id']=$data->id;
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            die("Error =>".$e);
        }
    }
}
