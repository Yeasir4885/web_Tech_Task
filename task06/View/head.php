<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        #list-of-url{
            list-style: none;
            width: 100%;
            text-align: center;
        }
       /* nav{
            padding-top: 20px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.85);
            height: 100px;
        }
        .container{
            margin: 0 auto;
            width: 100%;
            
        }
        .nav-icon{

            width: 5%;
            float: left;
            text-align: right;
        }
        .nav-links{
            width: 90%;
            float: left;
            color: white;
        }

        .nav-name{
          float: left;
          color: white;
          font-size: 20px;
        }
        ul{
            list-style: none;
            width: 100%;
            text-align: right;
        }
        ul li{
            display: inline-block;
            padding: 5px 5px;
            line-height: 70px;
            font-size: 20px;
            opacity: 0.8;

            
        }*/
        /*#nav-icon > .nav-links > ul > li:hover {
        cursor: pointer;
        opacity: 1;*/
  }
        
        footer{
          width: 100%;
          text-align: center;
          color: rgba(0, 0, 0, 0.85);
        }
        .red{
            color: red;
        }
        .blue{
            color: blue;
        }
        .black{
            color: black;
        }
       
        .green{
            color: green;
        }
      
        .footer-part, .footer-container{
          width: 100%;
          text-align: center;
          color: white;
        }
        .footer-part{
          padding: 30px 0;
          background-color: rgba(0, 0, 0, 0.85);
        }
        .my-content{
          padding: 320px 0;
          text-align: center;
        }
        .custom-form{
            padding: 95px 0;
        }
        .custom-form-login{
            padding: 260px 0;
        }
        .custom-form-fpass{
            padding: 280px 0;
        }
       
      /*  .new-container{
            width: 50%;
            margin: 0 auto;
            text-align: center;

        }

        .navitems table ul li{
           display: block;
           text-align: left;
        }
        .navitems table ul  li a{
           display: block;
           color: #000 !important;
        }*/
        .DoctorList{
            color: black;
            text-align: center;

        }
        .table, th, td {
            border:1px solid black;

        }
    </style>

<link rel="stylesheet" href="/Online Health Service/CSS/all.min.css">
<link rel="stylesheet" href="/Online Health Service/CSS/bootstrap.min.css">
<link rel="stylesheet" href="/Online Health Service/CSS/style.css">
</head>
<body>
    <!-- <nav>
        <div class="container">
            <div class="nav-icon">
              <img src="Home-page.png" height="70px" width="50px">

            </div>
            <div class="nav-name">
              <h1>Online Health Service</h1>
            </div>
            <div class="nav-links">
                <ul>
                    <?php //if(isset($_SESSION['username'])){ ?>
                    <li><?php //echo "Logged in as "?><a href="#"><?php //echo $_SESSION['username']; ?></a></li>
                    <li><a href="../Controller/Logout.php">Logout</a></li>
                    
                    <?php //}else{ ?>
                    <li><a href="../View/Public Home.php">Home</a></li>
                    <li><a href="../View/Login.php">Login</a></li>
                    <li><a href="../View/Registration.php">Registration</a></li>
                <?php// } ?>
                </ul>
            </div>
        </div>
    </nav> -->




<nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
<div class="container text-light">


  <a class="navbar-brand" href="../View/Public Home.php"><img src="Home-page.png" height="70px" width="50px"></a>
  <h1>Online Health Service</h1>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-light">
      <?php if(isset($_SESSION['username'])){ ?>
                    <li class="nav-item"><?php echo "Logged in as "?><a class="nav-link" href="#"><?php echo $_SESSION['username']; ?></a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="../Controller/Logout.php">Logout</a></li>
                    
                    <?php }else{ ?>
                    <li class="nav-item"><a class="nav-link text-light" href="../View/Public Home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="../View/Login.php">Login</a></li>
                    
                <?php } ?>
      
    </ul>
    </div>
  </div>
</nav>