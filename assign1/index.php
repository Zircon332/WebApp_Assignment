<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home|Rentone</title>
    <meta charset="utf-8" />
    <meta name="author" content="Ryan Yap, Wong Kah Heng, Joel Yong, Wong Jun Jie" />
    <meta name="description" content="The Home Page" />
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

    <article id="textinfo">
        <h2>Who are we?</h2>
        <p>We're Rentone, a rental service that offers rental instruments ranging from the gentlest of woodwind flutes to the hard-hitting percussions, whatever instrument you're looking for, we've got you covered.
            Our instruments are always kept in tip top condition and are of the highest quality, with some of the most competitive prices on the market.</p>
    </article>
    <div id="audio">
    <h2>Listen to the instruments in action!</h2>
        <audio controls='controls'><source src="audio/Hikari%20%E5%85%89%20%20(Simple%20and%20Clean)%20Orchestral%20Instrumental%20Version.mp3" type="audio/mpeg"/></audio>
        <!-- This audio taken from youtube, credit to youtuber "Yoda". We do not own Kingdom Hearts, Disney or Square Enix -->
    </div>
    <div id="menu">
        <div id="cat1">
            <a href='product1.php'>
                <img src="image/brassabout.jpg" alt="brassImage" />
                <h2>Brass</h2>
            </a>
        </div>
        <div id="cat2">
            <a href='product2.php'>
                <img src="image/stringabout.jpg" alt="stringImage" />
                <h2>String</h2>
            </a>
        </div>
        <div id="cat3">
            <a href='product3.php'>
                <img src="image/woodwindabout.jpg" alt="woodwindImage" />
                <h2>Woodwind</h2>
            </a>
        </div>
        <div id="cat4">
            <a href='product4.php'>
                <img src="image/percussionabout.jpg" alt="percussionImage" />
                <h2>Percussion</h2>
            </a>
        </div>
    </div>

    <section id="about">
        <h1>Play instruments with Rentone!</h1>
        <table>
            <tr>
                <th>Easy to rent</th>
                <th>Best prices</th>
                <th>Instant delivery</th>
                <th>Easy return</th>
            </tr>
            <tr>
                <td>With Rentone it's never been easier to rent instruments before. Just send an order online
                    and we'll bring your instrument to your doorstep</td>
                <td>We make sure our instruments have some of the lowest and most affordable rental costs on
                    the market</td>
                <td>We deliver all instruments within 3 working days from your date of order, no delay
                </td>
                <td>Want to play a differnt instrument instead? No worries, return your instrument and you can
                    rent a different instrument for 50% off!</td>
            </tr>
        </table>
    </section>

    <aside id="homeenq">
        <h1> Want to place an order? Just click right here </h1>
        <button onclick="window.location.href='enquiry.php'" class="button"><span>ORDER HERE</span></button>
    </aside>

    <hr />
    <footer>
        <?php include_once("includes/footer.php");?>
    </footer>

    <script src="script/script.js"></script>
    <script src="script/enhancements.js"></script>
</body>

</html>
