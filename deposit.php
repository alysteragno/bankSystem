<?php
session_start();

// Initialize balance if not already set
if (!isset($_SESSION['balance'])) {
    $_SESSION['balance'] = 0;
}

// Only process if the request method exists and is POST
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = floatval($_POST['amount']);
    $_SESSION['balance'] += $amount;
    header('Location: balance.php');
    exit();
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
    <script defer src="script.js"></script>
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
                <form action="deposit.php" method="POST">
                    <input type="number" name="amount" placeholder="Enter deposit amount" step="0.01" required class="form-control">
                    <div class="depositContainer">
                        <button type="submit" id="btnD">Deposit</button>
                    </div>
                    <div>
                <h2 id="depositText">
                    you have deposited $<?php echo number_format($_SESSION['balance'], 2); ?>
                </h2>

                    </div>
                </form>

                        </div>

                       
                    </div>

                    <div class="btnContainer">
                        <button class="btn">
                             <a href="index.php" class="ctabth">Back to Home</a>  
                        </button>
                    </div>

                    
      <footer>
        <div>
            <h3>Developed by: Alyster A</h3>
        </div>
        <div>
            <h4>All rights reserved.</h4>
        </div>
        <div>
            <a href="https://www.linkedin.com/in/alyster-marasigan-9314692ba/" target="_blank">
                <img src="img\linkedLogo.svg" alt="" class="linkedLogo">
            </a>
        </div>
    </footer>
                
</body>  
</html>  