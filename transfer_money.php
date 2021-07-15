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
    <title>Transfer Money by Sparks Bank</title>
    <link rel="stylesheet" href="transfer_money.css" type="text/css">
    <style type="text/css">
    html {
    height:100%
}

body {
    background-image:url(img/m8.jpg);
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



nav a:hover {   
    background-color:grey;
}

main {
    height:600px;
    width:1000px;
}

table {
    border-collapse:collapse;
    border:2px solid black;
    margin-top:30px;
    margin-left:100px;
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
    padding-top:10px;
    padding-bottom:10px;
    padding-left:10px;
    padding-right:10px;
    font-family: cursive;
}

.btn {
    padding-left:0px;
    padding-right:0px;
    font-family: cursive;
    font-size:20px;
    border-style:none;
    border-radius: 5px;
    width:70%;
    height:80%;
   
    
}

.btn:hover {
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
                <h3>TRANSACTION</h3>
            </header>

            <main>
                <table style="width:100%">
                    <tr>
                      <th>Sr No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Balance</th>
                      <th>Operation</th>
                    </tr>
                      <?php
                         include 'config.php';
                         $sql = "SELECT * FROM customers";
                         $result = mysqli_query($conn, $sql);
                         
                         while ($rows = mysqli_fetch_assoc($result)) {
                       ?>
                    <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name'] ?></td>
                        <td><?php echo $rows['email'] ?></td>
                        <td><?php echo $rows['balance'] ?></td>
                        <td><a href="selectuser.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn btn-outline-dark">Transfer</button></a></td>       
                    </tr>
                      <?php
                            }
                       ?>
                </table>
            </main>
        </div>

        
    </body>
    
</html>