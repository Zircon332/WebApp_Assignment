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
    </section>

    <?php
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

    ?>

    <article>
      <table>
        <th>Description</th>
        <th>Value</th>
        <tr>
          <td>First name</td>
          <td><?php echo $pfirstname;?></td>
        </tr>
        <tr>
          <td>Last name</td>
          <td><?php echo $plastname;?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $pemail;?></td>
        </tr>
        <tr>
          <td>First name</td>
          <td><?php echo $pphone;?></td>
        </tr>
        <tr>
          <td>First name</td>
          <td><?php echo $pstreet;?></td>
        </tr>
        <tr>
          <td>First name</td>
          <td><?php echo $pcity;?></td>
        </tr>
        <tr>
          <td>First name</td>
          <td><?php echo $pstate;?></td>
        </tr>
        <tr>
          <td>First name</td>
          <td><?php echo $ppostcode;?></td>
        </tr>
        <tr>
          <td>First name</td>
          <td><?php echo $pproduct;?></td>
        </tr>
        <tr>
          <td>First name</td>
          <td><?php echo $pduration;?></td>
        </tr>
        <tr>
          <td>First name</td>
          <td><?php echo $pcomments;?></td>
        </tr>
      </table>

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
</body>

</html>
