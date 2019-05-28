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
        <div id="logo">
            <img src="image/logo.gif" alt="logo" /> <!-- https://www.google.com/search?q=music+rental+logo&rlz=1C1GCEJ_enMY842MY842&tbm=isch&source=iu&ictx=1&fir=MbPvCTUvLQPHlM%253A%252ClQdQacHjl7eSOM%252C_&vet=1&usg=AI4_-kQB1eiDk9RWKMmH0FTv45qccPoFwQ&sa=X&ved=2ahUKEwis-sbDl6HhAhXFh3AKHX4rB6QQ9QEwAnoECAkQCA#imgrc=j-82AillGreLPM:&vet=1 -->
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
    </section


    <?php
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
      <form id="bookform" method="post" action="process.php">
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
            <p>First Name: <span id="confirm_fname"></span></p>
            <p>Last Name: <span id="confirm_lname"></span></p>
            <p>Email: <span id="confirm_email"></span></p>
            <p>Phone: <span id="confirm_phone"></span></p>
            <p>Street: <span id="confirm_street"></span></p>
            <p>City: <span id="confirm_city"></span></p>
            <p>State: <span id="confirm_state"></span></p>
            <p>Postcode: <span id="confirm_postcode"></span></p>
            <p>Product: <span id="confirm_product"></span></p>
            <p>Duration: <span id="confirm_duration"></span></p>
            <p>Comments: <span id="confirm_comment"></span></p>


            <input type="submit" value="Confirm Booking" />
            <input type="button" value="Cancel" id="cancelButton" onclick="cancelBooking()">
        </fieldset>
      </form>

    </article>

    <aside id='enquiryside'>
        <h3>Still need help? Contact us at: </h3>
        <p>Email: <a href="mailto:Rentone@gmail.com">Rentone@gmail.com</a></p>
        <p>Phone: <a href="tel:+60123456789">0123456789</a></p>
    </aside>
      <table>
        <tr>
          <td>Your name:</td>

        </tr>
      </table>

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

    <script src="script/script.js"></script>
    <script src="script/enhancements.js"></script>
    <script src="script/confirm.js"></script>
</body>

</html>
