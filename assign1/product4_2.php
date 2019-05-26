<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS Snare|Rentone</title>
    <meta charset="utf-8" />
    <meta name="author" content="Ryan Yap, Wong Kah Heng, Joel Yong, Wong Jun Jie" />
    <meta name="description" content="The CMS-All Series Page" />
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
            <p class="forblock"><img class="thumbnails" src="image/snaredrums.jpg" alt="CMS-All Series Snare" /></p>
            <!-- img source: https://www.steveweissmusic.com/product/1126835/yamaha-snare-drums -->
            <ol>
                <li>Description
                    <p>The 8-ply shell models were designed to mimic the GS Series, offering an amazing attack and versatility for a wide range of performance situations. In this model, a new shell design is implemented, which provides more snap and clarity. Different from past models, it also has an extra deep snare bed, that results in improved contact between snares and the bottom head for quicker respose.</p>
                </li>
                <li>Specifications
                    <table>
                        <tr>
                            <th>Name: </th>
                            <td>CMS-All Series Snare</td>
                        </tr>
                        <tr>
                            <th>Diameter: </th>
                            <td>13in</td>
                        </tr>
                        <tr>
                            <th>Finish: </th>
                            <td>Maple</td>
                        </tr>
                        <tr>
                            <th>Hoop: </th>
                            <td>Steel</td>
                        </tr>
                        <tr>
                            <th>Tuning Bolts: </th>
                            <td>10x2</td>
                        </tr>
                        <tr>
                            <th>Shell Thickness: </th>
                            <td>8-ply</td>
                        </tr>
                        <tr>
                            <th>Shell Material: </th>
                            <td>Maple</td>
                        </tr>
                        <tr>
                            <th>Accessories: </th>
                            <td>Tuning Key</td>
                        </tr>
                        <tr>
                            <th>Pricing: </th>
                            <td>RM150 per month</td>
                        </tr>
                    </table>
                </li>
                <li>Pricing Explanation
                    <p>At a reasonable price of USD560, which when converted is around RM2300, the CSM-All Series Snare drum provides financial flexibility for those who want to rent for practice use, being at the low rental price of RM150 a month. Other than that, it could be a cheaper alternative to performances as well.</p>
                </li>
                <li>Disclaimer
                    <p>When in possession of the instrument, the user holds full responsibility for what happens to the instrument. If the instrument rented is in anyway damaged, the customer will have to replace said instrument for the rental service. Late returners of the instrument would be issued a warning in a week, and will be subjegated to a RM150 late fee. For every subsequent week, another RM150 would be added.</p>
                </li>
            </ol>
        </section>

        <aside class="subject_cont">
            <button type="button" id="subject_button" onclick="getSubject('CMS Snare')">Order At Enquiry</button>
        </aside>
    </article>
    <hr />
    <footer>
        <?php include_once("includes/footer.php");?>
    </footer>

    <script src="script/script.js"></script>
    <script src="script/enhancements.js"></script>
</body>

</html>
