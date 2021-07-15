<!Doctype html>
<html ang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style type="text/css">
        html {
    height:100%
}

body {
    background-image:url(img/s6.jpeg);
    background-size:cover;
    background-repeat:no-repeat;
}

.container {
    margin-left:1px;
    margin-right:-80px;
    width:1277px;
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
    padding-top:1px;
    background-color:#000000;
    color:white;
    height:50px;
    padding:7px; 
}



nav a:hover {   
    background-color:grey;
}

table {
    background-color:rgba(243, 139, 41, 0.397);
    border-collapse:collapse;
    border:2px solid black;
    margin-top:30px;
    margin-left:300px;
    background: transparent;

}

table th {
    font-family: sans-serif;
    border:2px solid black;
    font-size:25px;
    color:rgb(128, 85, 0);
    padding-top:10px;
    padding-bottom:10px;
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
    padding-top:10px;
    padding-bottom:10px;
    padding-left:10px;
    padding-right:10px;
    font-family: cursive;
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
        <h3>Transaction History</h3>
        <div class="section">
            <table>
                    <tr>
                        <th>Sr No.</S></th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Amount</th>
                        <th>Date & Time</th>
                    </tr>

                    <?php
                    include 'config.php';

                    $sql = "SELECT * FROM `transfers`";
                    $query = mysqli_query($conn, $sql);

                    while ($rows = mysqli_fetch_assoc($query)) {

                    ?>
                        <tr>
                            <td><?php echo $rows['sr_no']; ?></td>
                            <td><?php echo $rows['sender']; ?></td>
                            <td><?php echo $rows['receiver']; ?></td>
                            <td><?php echo $rows['amount']; ?></td>
                            <td><?php echo $rows['date_time']; ?></td>
                        </tr>

                    <?php
                    }

                    ?>

            </table>
        </div>
    </body>
    
</html>