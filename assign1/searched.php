<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Rent|Rentone</title>
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
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];

      if ($conn){
        $query = "SELECT * FROM userinfo WHERE fname='$fname' AND lname='$lname'";
        $result = mysqli_query($conn, $query);
        if($result){
          $row = mysqli_fetch_assoc($result);
          if($row){
            echo "<table>";
            echo "<tr><th>UserID</th><th>Subject</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Phone No.</th><th>Street</th><th>City</th><th>State</th><th>Postcode</th><th>Product</th><th>Duration</th><th>Comments</th></tr>";
              echo "<tr><td>{$row['userID']}</td>";
              echo "<td>{$row['subject']}</td>";
              echo "<td>{$row['fname']}</td>";
              echo "<td>{$row['lname']}</td>";
              echo "<td>{$row['email']}</td>";
              echo "<td>{$row['phone']}</td>";
              echo "<td>{$row['street']}</td>";
              echo "<td>{$row['city']}</td>";
              echo "<td>{$row['state']}</td>";
              echo "<td>{$row['postcode']}</td>";
              echo "<td>{$row['product']}</td>";
              echo "<td>{$row['duration']}</td>";
              echo "<td>{$row['comment']}</td></tr>";
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
