<?php  
session_start();  
if (!isset($_SESSION['balance'])) {  
$_SESSION['balance'] = 0;  
}  
?>  
<!DOCTYPE html>  
<html lang="en">  
<head>  
<meta charset="UTF-8">  
<title>Check Balance</title>  
<link rel="stylesheet" href="styles.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&family=NTR&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto:ital,wght@0,100..900;1,100..900&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>  
<body>  
     <header style="font-family: Nunito">
        <img src="img\bdo_logo.jpg" alt="">
    </header>

    <div>
        <container>
            <div class="mainContainer">
                <div class="motto"></div>
                    <h1>Welcome to BDO</h1>
                    <h2 class="mottoo">We Find Ways.</h2>
                </div>  
                <div>

                    
                    <div class="parent2">
                        <div class="balanceContainer2">
                            <h1>Your Current Balance is 
                            $<?php 
                            echo number_format($_SESSION['balance'], 2); ?>
                            </h1>  
                        </div>
                    </div>

                    <div class="btnContainer">
                        <button class="btn">
                             <a href="index.php" class="ctabth">Back to Home</a>  
                        </button>
                    </div>

</body>  
</html>  