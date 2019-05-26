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
        <div id="logo">
            <img src="image/logo.gif" alt="logo" />
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li>
			<div id='navcont'>
				Products
                <div id='productlist'>

				</div>
			</div>
			</li>
            <li><a href="enquiry.html">Enquiry</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
        </ul>
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
        $query = "SELECT * FROM userinfo";
        $result = mysqli_query($conn, $query);
        if($result){
          $row = mysqli_fetch_assoc($result);
          if($row){
            echo "<table>";
            echo "<tr><th>UserID</th><th>Subject</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Phone No.</th><th>Street</th><th>City</th><th>State</th><th>Postcode</th><th>Product</th><th>Duration</th><th>Comments</th></tr>";
            while($row){
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
        <div class="footer_grid">
            <div id="footer_item_1">
                <img src="image/logo.gif" alt="logo" />
            </div>
            <div id="footer_item_2">
                <h2>Rentone</h2>
                <p>Rentone is a small music renting company that rents high quality instruments for the most reasonable of prices!</p>
                <p>Rentone has instruments ranging from performance class trumpets to classic guitars, rent an instrument today!</p>
            </div>
            <div id='footer_item_3'>
                <h2>Check out</h2>
                <p><a href="index.html">Home</a></p>
                <p><a href="enquiry.html">Enquiry</a></p>
                <p><a href="aboutus.html">About Us</a></p>
            </div>
            <div id='footer_item_4'>
                <h2>Products</h2>
                <p><a href="product1.html">Brass</a></p>
                <p><a href="product2.html">Strings</a></p>
                <p><a href="product3.html">Woodwind</a></p>
                <p><a href="product4.html">Percussion</a></p>
            </div>
            <div id='footer_item_5'>
                <h2>Contact us</h2>
                <p><a href="https://www.facebook.com/RentoneMalaysia/" target='_blank'>Facebook</a></p>
                <p><a href="mailto:Rentone@gmail.com">Email us</a></p>
                <p><a href="tel:+60123456789">Phone Us</a></p>
            </div>
        </div>
        <p class="footer_copyright">All rights reserved 2019| &#169; Team Easier To Remember</p>
    </footer>
</body>

</html>