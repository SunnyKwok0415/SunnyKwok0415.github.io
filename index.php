
<!DOCTYPE html>

   <?php 
    include_once 'header.php'
?>

    <h1 id="index-text">Welcome, <?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'])[0];        
        echo '<meta http-equiv=REFRESH CONTENT=1;url=loginsuccess.php>';
        
        
    }else{
        echo 'Guest';
    } 
    ?> </h1>
    

<?php 
    include_once 'footer.php'
?>