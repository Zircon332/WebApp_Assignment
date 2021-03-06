<!DOCTYPE html>
<html lang="en">

<head>
    <title>TP-4300R|Music Rental</title>
    <meta charset="utf-8" />
    <meta name="author" content="Ryan Yap, Wong Kah Heng, Joel Yong, Wong Jun Jie" />
    <meta name="description" content="The TP-4300R Page" />
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

    <article>
        <section class="borderit">
            <p class="forblock"><img class="thumbnails" src="image/timpani.jpg" alt="TP-4300R" /></p>
            <!-- image source: https://www.musiciansfriend.com/concert-percussion/yamaha-tp-4300r-series-standard-timpani -->
            <ol>
                <li>Description
                    <p>Timpani or kettledrums are musical instruments that are part of the percussion family. They consist of a membrane called a head stretched over a large bowl. They are played by striking the head with timpani mallets or sticks. The TP-4300R series of timpanis &#40;Aluminium bowls&#41; are lightweight and have the same overall performance as higher-end models &#40;Copper bowls&#41;.</p>
                </li>
                <li>Specifications
                    <table>
                        <tr>
                            <th>Name: </th>
                            <td>TP-4300R series</td>
                        </tr>
                        <tr>
                            <th>Head: </th>
                            <td>Yamaha Remo Renaissance</td>
                        </tr>
                        <tr>
                            <th>Material: </th>
                            <td>Aluminium</td>
                        </tr>
                        <tr>
                            <th>Tuning Mechanism: </th>
                            <td>Pedal Balance Spring System</td>
                        </tr>
                        <tr>
                            <th>Accessories: </th>
                            <td>Tuning Key, Allen Wrench, Head Protector</td>
                        </tr>
                        <tr>
                            <th>Pricing: </th>
                            <td>RM500 per month per drum</td>
                        </tr>
                    </table>
                </li>
                <li>Pricing Explanation
                    <p>USD2445, or RM10000, is the cost of per drum. Measuring via the materials needed and also the elite craftmanship, it is not too much to ask for RM500 a month for each drum, as they roughly cost the same. These are recommended to be rented during the month of the performance and are not suitable for practice purposes due to its financial burden.</p>
                </li>
                <li>Disclaimer
                    <p>When in possession of the instrument, the user holds full responsibility for what happens to the instrument. If the instrument rented is in anyway damaged, the customer will have to replace said instrument for the rental service. Late returners of the instrument would be issued a warning in a week, and will be subjegated to a RM150 late fee. For every subsequent week, another RM150 would be added.</p>
                </li>
            </ol>
        </section>

        <aside class="subject_cont">
            <button type="button" id="subject_button" onclick="getSubject('TP-4300R')">Order At Enquiry</button>
        </aside>
    </article>

    <?php include_once("includes/regbox.php")?>
    
    <hr />
    <footer>
        <?php include_once("includes/footer.php");?>
    </footer>

    <script src="script/script.js"></script>
    <script src="script/enhancements.js"></script>
</body>

</html>
