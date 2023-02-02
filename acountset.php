<?php 
    try{
        $dsn='mysql:dbname=Login;host=localhost;charset=utf8';
        $user='db_user1';
        $password='db_user1';
        
        $PDO = new PDO($dsn,$user,$password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $ID = $_POST["userID"];
        $NAME = $_POST["userNAME"];

        $stmt = $PDO->prepare('INSERT INTO user(id,name) VALUES(:ID,:name)');
        $stmt->bindValue(':id',$_POST["userID"]);
        $stmt->bindValue(':name',$_POST["userNAME"]);
        $stmt->execute();

        
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
    <title>Gamedownload</title>
</head>
<body>
    <div class="top">
        <h2>Solar_Gladiators</h2>
        <p id="top_right">
            ID :<?php echo $ID?>
            日時<?php echo date('Y年m月d日'); ?>
        </p>
    </div>
</body>
</html>