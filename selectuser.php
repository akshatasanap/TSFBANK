<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id=$from";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from customers where id=$to";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount) < 0) {
        echo "<script> alert('Amount cannot be less than zero') </script>";
    }



    // constraint to check insufficient balance.
    else if ($amount > $sql1['balance']) {
        echo "<script> alert('The amount you want to transfer, is out of your balance. Please try again.') </script>";
    }



    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script> alert('Oops zero value cannot be transfered') </script>";
    } else {

        // deducting amount from sender's account
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE customers set balance=$newbalance where id=$from";
        mysqli_query($conn, $sql);


        // adding amount to reciever's account
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE customers set balance=$newbalance where id=$to";
        mysqli_query($conn, $sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transfers(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful');
                                     window.location='transfer_history.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Transaction</title>
    <link rel="stylesheet" type="text/css" href="selectuser.css">
    <style type="text/css">
    html {
    height:100%
}

body {
    background-image:url(img/s4.jpeg);
    background-size:cover;
    background-repeat:no-repeat;
}

.container {
    margin-left:auto;
    margin-right:auto;
    width:1260px;
}


header {
    padding-top:30px;
    height:70px;
}

h3 {
    color:black;
    text-align:center;
    font-size:30px;
    margin-top:0px;
    font-family: Georgia, serif;
}

nav {
    background-color:#000000;
    color:white;
    height:50px;
    padding:7px; 
}


nav a {
    color:white;
    font-size:15px;
    padding-left:100px;
    text-decoration-line: none;
    text-align:center;
    padding-left:65px;
    padding-right:65px;
}

nav a:hover {   
    background-color:grey;
}

main {
    height:650px;
}

table {
    border-collapse:collapse;
    border:2px solid black;
    margin-top:30px;
    margin-left:400px;
    background: transparent;
}

table th {
    font-family: sans-serif;
    border:2px solid black;
    font-size:25px;
    color:rgb(128, 85, 0);
    padding-top:5px;
    padding-bottom:5px;
    padding-left:10px;
    padding-right:10px;
    font-family: cursive;
}

table td {
    margin-right:50px;
    border:2px solid black;
    font-size:20px;
    color:rgb(109, 13, 21);
    text-align:center;
    padding-top:15px;
    padding-bottom:15px;
    padding-left:10px;
    padding-right:10px;
    font-family: cursive;
}


.section {
    margin-left:200px;
    width:900px;
    height:350px;
    padding-top:50px;
  
}

label {
    padding-top:80px;
    color:black;
    font-size:25px;
    padding-left:200px;
    font-family: cursive;
}

select {
    font-size:22px;
    color:black;
    font-family: cursive;
}

option {
    font-size:24px;
    color:black;
}

input {
    font-size: 20px;
    color:black;
    font-family: cursive;
}

button {
    margin-top:50px;
    margin-left:360px;
    padding-left:5px;
    padding-right:5px;
    color:rgb(83, 10, 10);
    font-size:25px;
    border-style:none;
    border-radius: 12px;
    width:15%;
    height:15%;
}

button:hover {
    color:white;
    background-color:rgb(255, 204, 0);
}
    </style>
</head>

<body>
        <div class="container">
            <nav>
            <a href="index.php" class="w3-bar-item w3-button">THE SPARKS FOUNDATION BANK (TSF)</a>
            <div class="w3-right w3-hide-small">
            <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> HOME</a>
            <a href="transfer_money.php" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> TRANSACTION</a>
            <a href="transfer_history.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> HISTORY</a>
            </nav>    
        </div>
    
        <header>
            <h3>Transfer Money</h3>
        </header>

        <main>
            <!--
            <?php
            include 'config.php';
            $sid = $_GET['id'];
            $sql = "SELECT * FROM  customers where id=$sid";
            $result = mysqli_query($conn, $sql);
            if (!$result) {
                echo "Error : " . $sql . "<br>" . mysqli_error($conn);
            }
            $rows = mysqli_fetch_assoc($result);
            ?>
            -->

            <form method="post" name="tcredit"><br>
                <table>
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Balance</th>
                    </tr>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name'] ?></td>
                        <td><?php echo $rows['email'] ?></td>
                        <td><?php echo $rows['balance'] ?></td>
                    </tr>
                </table>
                <br><br><br>
                
                <div class="section">
                    <label><b>Transfer To:</b></label>
                    <select name="to" required>
                        <option value="" disabled selected>Choose</option>
                        
                        <?php
                        include 'config.php';
                        $sid = $_GET['id'];
                        $sql = "SELECT * FROM customers where id!=$sid";
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo "Error " . $sql . "<br>" . mysqli_error($conn);
                        }
                        while ($rows = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?php echo $rows['id']; ?>">

                                <?php echo $rows['name']; ?> (Balance:
                                <?php echo $rows['balance']; ?> )
                            </option>
                        <?php
                        }
                        ?>
                    
                    </select>
                    <br><br><br>
                    <label><b>Amount:</b></label>
                    <input type="number" name="amount" required>
                    <br><br>
                    <button name ="submit" type ="submit">Transfer</button>
                </div>
            </form>
        </main>

        <footer></footer>
</body>



</html>