<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register|Rentone</title>
    <meta charset="utf-8" />
    <meta name="author" content="Ryan Yap, Wong Kah Heng, Joel Yong, Wong Jun Jie" />
    <meta name="description" content="Enquiry Viewing Page" />
    <meta name="keywords" content="enquiry, viewing, viewing enquiry" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <script src="script/script.js"></script>
    <script src="script/enhancements.js"></script>
</head>

<body>
    <header>
        <?php include_once("includes/header.php");?>
    </header>
    <nav>
        <?php include_once("includes/nav.php");?>
    </nav>

    <div id="banner2">
    </div>
  <?php
      $user = $_POST['uName'];
      $pass = $_POST['uPass'];
      $name = $_POST['vName'];
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "userdb";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if($conn){
        $query = "INSERT INTO usertable(username, password, name, datejoined)
        VALUES('$user', '$pass', '$name', curdate())";
        $result = mysqli_query($conn, $query);
        if($result){
          echo "<p>Thank you for registering: " . $name . "</p>";
          echo "<p><a href='index.php'>Return to Home Page</a></p>";
        } else{
          echo "Registration failed!";
          die;
        } 
      } else{
        die("Connection Failed: " . mysqli_connect_error());
      }
    ?>
    <article class='viewenquiry'>
    </article>

    <hr />
    <footer>
        <?php include_once("includes/footer.php");?>
    </footer>
</body>

</html>
