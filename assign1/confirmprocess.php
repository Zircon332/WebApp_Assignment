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
  
      function sanitiseInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
      }
      
      $err = "";
  
    if(isset($POST['subject'])){
      $subject = $_POST['subject'];
      $subject = sanitiseInput($subject);
      
      if(strlen($subject) == 0){
        $err .= "Subject Empty<br />";
      }
    }
  
    if(isset($_POST['pfname'])){
      $firstname = $_POST['pfname'];
      $firstname = sanitiseInput($firstname);
      
      if(!preg_match("/^[A-Za-z]+$/", $firstname)){
        $err .= "Invalid Firstname<br />";
      } 
      }else{
        $err .= "Firstname Empty<br />";
    }
  
    if(isset($_POST['plname'])){
      $lastname = $_POST['plname'];
      $lastname = sanitiseInput($lastname);
      
      if(!preg_match("/^[A-Za-z]+$/", $lastname)){
        $err .= "Invalid Lastname<br />";
      } 
      } else{
        $err .= "Lastname Empty<br />";
    }
   
    if(isset($_POST['pemail'])){
      $pemail = $_POST['pemail'];
      $pemail = sanitiseInput($pemail);
      
      if(!preg_match("/^(.)+@(.)+(.com)$/", $pemail)){
        $err .= "Invalid Email<br />";
      }
    }else{
      $err .= "Email Empty<br />";
    }
    if(isset($_POST['pphone'])){
      $pphone = $_POST['pphone'];
      $pphone = sanitiseInput($pphone);
      
      if(!preg_match("/^[0-9]{10}+$/", $pphone)){
        $err .= "Invalid Phone Number<br />";
      }
    }else{
      $err .= "Empty Phone Number<br />";
    }
  
      if(!isset($_POST['pstreet'])){
        $err = "Empty Street<br />";
      }else{
        $pstreet = $_POST['pcity'];
        $pstreet = sanitiseInput($pstreet);
      }
      if(!isset($_POST['pcity'])){
        $err = "Empty City<br />";
      }else{
        $pcity = $_POST['pcity'];
        $pcity = sanitiseInput($pcity);
      }
      if(!isset($_POST['pstate'])){
        $err = "Empty State<br />";
      }else{
        $pstate = $_POST['pstate'];
        $pstate = sanitiseInput($pstate);
      }
    if(isset($_POST['ppostcode'])){
      $ppostcode = $_POST['ppostcode'];
      $ppostcode = sanitiseInput($ppostcode);
      
      if(!preg_match("/^[0-9]{5}+$/", $ppostcode)){
        $err .= "Invalid Postcode<br />";
      }
    }else{
      $err .= "Empty Postcode><br />";
    }
    if(!isset($_POST['pproduct'])){
      $err .= "Empty Product<br />";
    }else{
        $pproduct = $_POST['pproduct'];
        $pproduct = sanitiseInput($pproduct);
    }
    if(isset($_POST['pduration'])){
      $pduration = $_POST['pduration'];
      $pduration = sanitiseInput($pduration);
      
      if($pduration < 0 && !preg_match("/^[0-9]+$/", $pduration)){
        $err .= "Invalid Duration<br />";
      }
    }else{
      $err .= "Empty Duration<br />";
    }
      if(isset($_POST['pcomments'])){
        $pcomments = $_POST['pcomments'];
        $pcomments = sanitiseInput($pcomments);
      }else{
        $pcomments = "N/A";
      }
      
    
      $servername = 'localhost';
      $username = 'root';
      $password = "";
      $dbname = 'enquirydb';
      
      $conn = mysqli_connect($servername, $username, $password, $dbname);
  if($err == ""){
      if($conn){
        $query = "INSERT INTO userinfo(subject, fname, lname, email, phone, street, city, state, postcode, product, duration, comment)
        VALUES('$subject', '$firstname', '$lastname', '$pemail', '$pphone', '$pstreet', '$pcity', '$pstate', '$ppostcode', '$pproduct', '$pduration', '$pcomments')";
        $result = mysqli_query($conn, $query);
        if($result){
          echo "<h2>Your enquiry has been sent to us successfully! Thank You!</h2>";
          echo "<h2>To view all enquiries, go to <a href='view_enquiry.php'>View Enquiries</a></h2>";
        }else{
          echo "Your Enquiry has failed, please try again.";
        }
      }else{
        die("Connection FailedL " . mysqli_connect_error());
      }
  }else{
    echo "<p>" . $err . "</p>";
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
