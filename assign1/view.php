<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Enquiry|Rentone</title>
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

    <article class='viewenquiry'>
    <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "enquirydb";
      $conn = mysqli_connect($servername, $username, $password, $dbname);

      if ($conn){
        $query = "SELECT name, datejoined FROM usertable";
        $result = mysqli_query($conn, $query);
        if($result){
          $row = mysqli_fetch_assoc($result);
          if($row){
            echo "<table>";
            echo "<tr><th>Name</th><th>Date Joined</th></tr>";
            while($row){
              echo "<tr><td>{$row['name']}</td>";
              echo "<td>{$row['datejoined']}</td></tr>";
              $row = mysqli_fetch_assoc($result);
            }
            echo "</table>";

          }
        }
      } else{
        die("Connection Failed: " . mysqli_connect_error());
      }
    ?>
    </article>

    <hr />
    <footer>
        <?php include_once("includes/footer.php");?>
    </footer>
</body>

</html>
