<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Online SB BANK</title>
    
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
        <link href="css/common.css" rel="stylesheet" />
        <link href="css/transaction.css" rel="stylesheet" />
    </head>

    <body>
        <div class="header sticky-top">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.jpg" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" data-toggle="modal" data-target="#signup-modal">
                                <i></i><strong>Home</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    
        <div class="banner-container">
            <h2 class="white pb-3">Hello There, Transact Here.</h2>
    
            <form id="search-form">
                
                    <div class="input-group-append">
                        
                    </div>
                </div>
            </form>
        </div>

        <div class="page-container">
            <h1 class="page-heading">
                Transaction History
            </h1>
            <?php
                    $con = mysqli_connect("localhost:3308","root","","banking_system_sparks");
                    if (mysqli_connect_errno()){
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    $query ="SELECT * FROM `transaction` ";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0) {
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>id</th>";
                        echo "<th>Sender</th>";
                        echo "<th>Receiver</th>";
                        echo "<th>Amount</th>";
                        echo "<th>Date</th>";
                        echo "</tr>";
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['sender'] . "</td>";
                                echo "<td>" . $row['receiver'] . "</td>";
                                echo "<td>" . $row['amount'] . "</td>";
                                echo "<td>" . $row['date'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                    
            ?>
        </div>
        <div class="footer">
            <div class="page-container footer-container">
                <div class="footer-cities">
                    <div class="footer-city">
                        <h2 class="white pb-4">SB BANK</h2>
                        <a href="index.php">Home |</a><a href="index.php"> About Us|</a><a href="index.php"> Vision & Mission |</a><a href="index.php"> Contact Us</a>
                    </div>
                    <div class="footer-city">
                        <h2 class="white pb-4" style="float: right;">CONTACT US</h2><br>
                        <p class="white pb-4" style="float: right;">456D, XYZ Colony, Near<br> ABC Building, New York, USA<br>+1XXXXXXXXX</p>
                    </div>
                </div>
                <div class="footer-copyright">© 2022 Copyright SB BANK </div>
            </div>
        </div>
    </body>
</html>