
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">


</head>

<body>

        <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }

    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <a href="https://api.whatsapp.com/send?phone=85293329118&amp;text=你好，我想查詢" class="float" target="_blank" draggable="false">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

</body>

</html>

   <?php 
    include_once 'header2.php'
?>

    <h1 id="index-text">Welcome, <?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'])[0];    
        echo '<br>';  
        echo 'Login Success!';  
        
    }else{
        echo 'Guest';
    } 
    ?> </h1>
    

<?php 
    include_once 'footer.php'
?>