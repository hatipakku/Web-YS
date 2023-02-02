<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- <style  type="text/css">
        .top{
            display: flex;
            background-color:aqua;
        }
        .main{
            text-align: center;
        }
        #top_right{
            margin-left: auto;
        }
        #input{
            text-align: center;
        }
        #ID{
            text-align:start;
        }
    </style> -->
</head>
<body>
    <div class="top">
        <h2>Solar_Gladiators</h2>
        <p id="top_right">日時<?php echo date('Y年m月d日'); ?></p>
    </div>
    <div class="main">
        <form action="game.php" method="post">
                <h3>ログイン</h3>
                <p>ログインID:<input type="text" name="userID" required></p>
                <p>名前を入力してください<input type="text" name="userNAME" required></p>
                <p><input type="submit" value="ログイン"></p>
        </form>
            
        <!-- <form id="user_set" action="acountset.php" method="post">
            <h3>新規登録</h3>
            <p>ID:<input type="text" name="userID"></p>
            <p>名前:<input type="text" name="userNAME"></p>
            <input type="submit" value="登録">
        </form> -->
    </div>
</body>
</html>