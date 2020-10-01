<?php
    session_start();
    require_once 'connectUser.php';
    //require_once
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form method="post">
            <label for="">Votre Code</label><br>
            <input type="text" name="code" placeholder="code user"><br>
            <label for="">Votre password</label><br>
            <input type="password" name="password" placeholder="password"><br>
            <button type="submit">Connecter</button>
        </form>
    </center>
</body>

<?php
    if($_POST){
       extract($_POST);
      if(empty($code) OR empty($password)){
        echo 'veuillez remplir tout les champ';
      }else{
        if(connectUser($code,$password)){
            header('Location:Home.php');
        }else{
            echo 'code ou mot de passe incorrect';
        }
      }

    }
?>

</html>