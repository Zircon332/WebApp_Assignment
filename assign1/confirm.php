<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enquiry|Rentone</title>
    <meta charset="utf-8" />
    <meta name="author" content="Wong Jun Jie, Wong Kah Heng, Joel Yeong, Ryan" />
    <meta name="description" content="This is the enquiry page" />
    <meta name="keywords" content="rent, instruments, online ordering" />
    <link rel="stylesheet" type="text/css" href="styles/style.css" />
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
      $firstname=$_POST['fname'];
      $lastname=$_POST['lname'];
      $pemail=$_POST['email'];
      $pphone=$_POST['phone'];
      $pstreet=$_POST['street'];
      $pcity=$_POST['city'];
      $pstate=$_POST['state'];
      $ppostcode=$_POST['postcode'];
      $pproduct=$_POST['product'];
      $pduration=$_POST['duration'];
      $pcomments=$_POST['comments'];

    ?>

    <article>
      <form id="bookform" method="post" action="confirmProcess.php">
        <input type="hidden" name="subject" value="<?php echo $subject; ?>">
        <input type="hidden" name="pfname" value="<?php echo $firstname; ?>">
        <input type="hidden" name="plname" value="<?php echo $lastname; ?>">
        <input type="hidden" name="pemail" value="<?php echo $pemail; ?>">
        <input type="hidden" name="pphone" value="<?php echo $pphone; ?>">
        <input type="hidden" name="pstreet" value="<?php echo $pstreet; ?>">
        <input type="hidden" name="pcity" value="<?php echo $pcity; ?>">
        <input type="hidden" name="pstate" value="<?php echo $pstate; ?>">
        <input type="hidden" name="ppostcode" value="<?php echo $ppostcode; ?>">
        <input type="hidden" name="pproduct" value="<?php echo $pproduct; ?>">
        <input type="hidden" name="pduration" value="<?php echo $pduration; ?>">
        <input type="hidden" name="pcomments" value="<?php echo $pcomments; ?>">
        <fieldset>
          <legend>User Details</legend>
            <p>Subject: <span id="confirm_subject"><?php echo $subject; ?></span></p>
            <p>First Name: <span id="confirm_fname"><?php echo $firstname; ?></span></p>
            <p>Last Name: <span id="confirm_lname"><?php echo $lastname; ?></span></p>
            <p>Email: <span id="confirm_email"><?php echo $pemail; ?></span></p>
            <p>Phone: <span id="confirm_phone"><?php echo $pphone; ?></span></p>
            <p>Street: <span id="confirm_street"><?php echo $pstreet; ?></span></p>
            <p>City: <span id="confirm_city"><?php echo $pcity; ?></span></p>
            <p>State: <span id="confirm_state"><?php echo $pstate; ?></span></p>
            <p>Postcode: <span id="confirm_postcode"><?php echo $ppostcode; ?></span></p>
            <p>Product: <span id="confirm_product"><?php echo $pproduct; ?></span></p>
            <p>Duration: <span id="confirm_duration"><?php echo $pduration; ?></span></p>
            <p>Comments: <span id="confirm_comment"><?php echo $pcomments; ?></span></p>


            <input type="submit" value="Confirm" />
            <input type="button" value="Cancel" onclick="window.location.href='index.php'" />
        </fieldset>
      </form>

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
