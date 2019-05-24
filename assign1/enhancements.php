<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home|Rentone</title>
    <meta charset="utf-8" />
    <meta name="author" content="Ryan Yap, Wong Kah Heng, Joel Yong, Wong Jun Jie" />
    <meta name="description" content="The Enchancement Page" />
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

    <article class="enhancements">
        <h2>List of enhancements</h2>
        <ol>
            <li>Embedding External Content in aboutme pages. <a href="aboutme3.php#about_address">link to enhancement (aboutme1.html)</a>
              <p>The maps makes use of iframes, an element tag that allows pages to display another page within it by using a url. To display the map with locations,
                a url to google map's website with the location is used.</p>
              <p>The maps links are found with the help of this website. <a href="https://www.embedgooglemap.net/" target='_blank'>https://www.embedgooglemap.net/</a></p>
            </li>
            <li>Audio in index using audio element tag. <a href="index.php#audio">link to enhancement (index.html)</a>
              <p>The audio tag is a html5 element tag not covered in Labs. The audio tag links to a downloaded audio in the audio file, which can be played with the controls from the tag.
                The audio helps motivate and interest people into learning to play musical intruments or start playing them again, or generally for the users to have a better experience and
                leave a stronger impression on the website.</p>
            </li>
            <li>CSS grids to layout elements. <a href="product1.php">link to enhancement (product1.html)</a>
              <p>The products are layouted with grids within only css. This gives more control over how each inline-block elements are positioned under a grid container without having to change
                the html file as often, while being fluid as the page scales. Similar layouts were used in index, aboutus, and throughout the product pages in place of html tables.
                This was not covered in Labs.</p>
            </li>
            <li>CSS properties or selectors not taught in tutorials. <a href="#productlist">link to enhancement (nav bar)</a>
			  <p>The CSS selector ::after was used in the nav bar on every page to add and customise symbols and content after 'product' of the nav bar, and after every drop down product option.
			  The ::after selector adds content after every reiteration of the selected element. This selector was not covered in Labs.</p>
			</li>
        </ol>
    </article>

    <hr />
    <footer>
        <?php include_once("includes/footer.php");?>
    </footer>

    <script src="script/script.js"></script>
    <script src="script/enhancements.js"></script>
</body>

</html>
