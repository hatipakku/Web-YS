<?php 
    $dsn='mysql:dbname=Login;charset=utf8';
    $user='db_user1';
    $password='db_user1';
    $ID = 9999;
    $NAME = "none";

    try{        
        $dbh = new PDO($dsn,$user,$password);
        
        $stmt = $dbh->prepare("SELECT * FROM user WHERE id=:user");
        $stmt->bindParam(':user',$_POST['userID']);
        $rew = $stmt->execute();
        if($rew != null){
            // echo $_POST['userID'],$_POST['userNAME'];
            if($rew['name'] === $_POST['userNAME']){
                $ID = $rew['id'];
                $NAME = $rew['name'];
                echo $ID,$NAME;
                echo $_POST['userID'],$_POST['userNAME'];
            }
        }
    }catch(PDOException $e){
        exit('データベースに接続できません。<br>'.$e->getMessage());
    }finally{
        $PDO = null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php date_default_timezone_set('Asia/Tokyo'); ?>
</head>
<body>
<div class="top">
        <h2>Solar_Gladiators</h2>
        <p id="top_right">
            ID :<?php echo $ID; ?>
            名前:<?php echo $NAME;?>
            日時<?php echo date('Y/m/d H:i'); ?>
        </p>
    </div>
</body>
</html>