<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Online SB BANK</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/index.css" rel="stylesheet" />
</head>

<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html">
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
                    <li class="nav-item">
                        <a class="nav-link" href="transaction_history.php" data-toggle="modal" data-target="#login-modal">
                            <i></i><strong>Transaction History</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Banking_System/index.php#about" data-toggle="modal" data-target="#login-modal">
                            <i></i><strong>About Us</strong>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/Banking_System/index.php#contact" data-toggle="modal" data-target="#login-modal">
                            <i></i><strong>Contact Us</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div id="loading">
    </div>

    <div class="banner-container">
        <h2 class="white pb-3">Connecting Accounts, Connecting World!</h2>

        <form id="search-form">
            
                <div class="input-group-append">
                    
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="page-heading">
            Amenities
        </h1>
        <div class="row">
            <div class="page-card-container col-md">
                <a href="customer.php">
                    <div class="page-card rounded-circle">
                        <img src="img/customer.jpg" class="page-img" />
                    </div><br><br>
                    <h5 class="black pb-4">Register & View Customer Details</h5>
                </a>
            </div>

            <div class="page-card-container col-md">
                <a href="transaction.php">
                    <div class="page-card rounded-circle">
                        <img src="img/transaction.jpg" class="page-img" />
                    </div><br><br>
                    <h5 id="about" class="black pb-4">Transfer Money</h5>
                </a>
            </div>
        </div>
        <br><br>
        <h2 >About Us...</h2>
        <p >Beginning with one office in Mumbai, with a paid-up capital <br>of Rs.50 lakh and 50 employees, the Bank has made a rapid <br>growth over the years and blossomed into a mighty institution <br>with a strong national presence and sizable international<br> operations. In business volume, the Bank occupies a premier<br> position among the nationalised banks.</p>
        <br><br><br><h2 style="float: right;">Vision & Mission</h2><br><br><br>
        <p style="float: right;" id="contact">"To become the Bank of Choice For Corporates,<br> Medium Business & Upmarket Retail Customer & <br>Development Banking For Small Business, <br>Mass Market & Rural Markets."</p>
        <br><br><br><br><br><br><center><h2 style="align-items: center;">Contact Us</h2></center>
        <center>If you have any query please fill the below form or contact us via Email or Phone or In-Person.</center>
        <form action="index.php" method="POST" autocomplete="off">
        <br><br><center><input type="text" size="50" placeholder="Enter Your Name....." name="name1"></center>
        <br><center><input type="text" size="50" placeholder="Enter Your Email....." name="email1"></center>
        <br><center><textarea rows="10" cols="50" placeholder="Enter Your Query....." name="query1"></textarea></center>
        <center><input type="submit" name="submit"></center>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $name1=$_POST["name1"];
                $email1=$_POST["email1"];
                $query1=$_POST["query1"];
                $con = mysqli_connect("localhost:3308","root","","banking_system_sparks");
                if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $query = "INSERT INTO `query`(`name`, `email`, `query`) VALUES ('$name1','$email1','$query1')";
                $result = mysqli_query($con, $query);
                if ($result) {
                    echo("<script type=\"text/javascript\">");
                    echo("alert('Data Inserted Successfully!');");
                    echo("location='index.php';");
                    echo("</script>");
                } else {
                    echo("<script type=\"text/javascript\">");
                    echo("alert('Data Not Inserted');");
                    echo("location='index.php';");
                    echo("</script>");
                }
            }
        ?>
    </div>

    <div class="footer">
        <div class="page-container footer-container">
            <div class="footer-cities">
                <div class="footer-city">
                    <h2 class="white pb-4">SB BANK</h2>
                    <a href="index.php">Home |</a><a href="http://localhost/Banking_System/index.php#about"> About Us|</a><a href="http://localhost/Banking_System/index.php#about"> Vision & Mission |</a><a href="http://localhost/Banking_System/index.php#contact"> Contact Us</a>
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
