<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login|Rentone</title>
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
      $user = $_POST['dName'];
      $pass = $_POST['dPass'];
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "enquirydb";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if($conn){
        $query = "DELETE FROM usertable WHERE username = '$user' AND password = '$pass'";
        $result = mysqli_query($conn, $query);
        if($result){
          echo "<p>Successfully removed from database.</p>";
          echo "<p><a href='index.php'>Return to Home Page</a></p>";
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