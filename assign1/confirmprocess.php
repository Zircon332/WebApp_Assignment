<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enquiry|Rentone</title>
    <meta charset="utf-8" />
    <meta name="author" content="Wong Jun Jie, Wong Kah Heng, Joel Yeong, Ryan" />
    <meta name="description" content="This is the enquiry page" />
    <meta name="keywords" content="rent, instruments, online ordering" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
    <script src="confirm.js"></script>
</head>

<body>
    <header>
        <?php include_once("includes/header.php");?>
    </header>
    <nav>
        <?php include_once("includes/nav.php");?>
    </nav>
    <?php include_once("includes/banner.php");?>

    <section>
        <h2>ENQUIRY</h2>
        <p class="space_bottom">Welcome to the <strong>enquiry page</strong>. This is where you place your booking for renting an instrument.</p>
        <hr />
        <p class="space_bottom">Haven't decided on an instrument yet? <a href="index.html#menu">Click here to check them out.</a></p>
        <hr />
        <p class="space_bottom">All fields, unless stated otherwise, are required to be filled in, as they are necessary for us to safely deliver you.</p>
        <hr />
        <p class="space_bottom">We respect your privacy and take protecting it seriously.<br />
            All provided informtaion will be used only for the purpose of providing service for our clients.<br />
            For more information, check out our <a href="disclaimer.html">Disclaimer page</a>.</p>
    </section>

    <?php
      $subject = $_POST['subject'];
      $firstname=$_POST['pfname'];
      $lastname=$_POST['plname'];
      $pemail=$_POST['pemail'];
      $pphone=$_POST['pphone'];
      $pstreet=$_POST['pstreet'];
      $pcity=$_POST['pcity'];
      $pstate=$_POST['pstate'];
      $ppostcode=$_POST['ppostcode'];
      $pproduct=$_POST['pproduct'];
      $pduration=$_POST['pduration'];
      $pcomments=$_POST['pcomments'];
    
      $servername = 'localhost';
      $username = 'root';
      $password = "";
      $dbname = 'enquirydb';
      
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if($conn){
        $query = "INSERT INTO userinfo(subject, fname, lname, email, phone, street, city, state, postcode, product, duration, comment)
        VALUES('$subject', '$firstname', '$lastname', '$pemail', '$pphone', '$pstreet', '$pcity', '$pstate', '$ppostcode', '$pproduct', '$pduration', '$pcomments')";
        $result = mysqli_query($conn, $query);
        if($result){
          echo "<h1>Your enquiry has been sent to us successfully! Thank You!</h1>";
          echo "<h2>To view all enquiries, go to <a href='view_enquiry.php'>View Enquiries</a></h2>";
        }else{
          echo "Your Enquiry has failed, please try again later.";
        }
      }else{
        die("Connection FailedL " . mysqli_connect_error());
      }
    ?>

    <article>
    <aside id='enquiryside'>
        <h3>Still need help? Contact us at: </h3>
        <p>Email: <a href="mailto:Rentone@gmail.com">Rentone@gmail.com</a></p>
        <p>Phone: <a href="tel:+60123456789">0123456789</a></p>
    </aside>
    </article>


    <footer>
        <?php include_once("includes/footer.php");?>
    </footer>

    <script src="script/script.js"></script>
    <script src="script/enhancements.js"></script>
</body>

</html>
