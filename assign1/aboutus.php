<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Us|Rentone</title>
  <meta charset="utf-8" />
  <meta name="author" content="Joel Yong,Ryan Yap,Wong Kah Heng,Wong Jun Jie" />
  <meta name="description" content="The about page of developers" />
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

  <div id="banner">
  </div>

    <article>
        <div class='aboutcontainer'>
            <div id='about1'>
                <a href="aboutme1.php">
                    <img src='image/KH.jpg' alt='KahHengPhoto' />
                </a>
            </div>
            <div id='about2'>
                <a href="aboutme2.php">
                    <img src='image/JunJie.jpg' alt='JunJiePhoto' />
                </a>
            </div>
            <div id='about3'>
                <a href="aboutme3.php">
                    <img src='image/Ryan.jpg' alt='RyanPhoto' />
                </a>
            </div>
            <div id='about4'>
                <a href="aboutme4.php">
                    <img src='image/JoelYeong.jpg' alt='JoelPhoto' />
                </a>
            </div>
        </div>
    </article>

  <footer>
      <?php include_once("includes/footer.php");?>
  </footer>

  <script src="script/script.js"></script>
  <script src="script/enhancements.js"></script>
</body>

</html>
