<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enhancements 2|Rentone</title>
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

    <div id="banner2">
    </div>

    <article class="enhancements">
        <h2>List of enhancements</h2>


        <ol>
            <li>Using regular expression patterns to validate data  <a href="enquiry.php#email">link to enhancement (enquiry.html)</a>
                <p>The input values for email and phone number in our enquiry page are tested against regular expressions in our javascript code. Email is tested to make sure that it contains @ and .com, while phone number is tested to only contain numbers. The enhancement code is integrated into the original js code to validate email and phone inputs.</p>
                <p></p>
            </li>
            <li>Using HTML Form Elements to validate the form  <a href="enquiry.php#product">link to enhancement (enquiry.html)</a>
                <p>The js code in the enquiry form uses form elements to get the value in different inputs and validate them. The js code for the drop down menus also use form elements to manipulate the text content, value, or attributes of the options in the drop down menus. The enhancement code is integrated into the original js code in the drop down functions.</p>
            </li>
            <li>Pop up preview <a href="enquiry.php">link to enhancement (enquiry.html)</a>
                <p>When the user clicks on submit, the js code will display the users inputted values and prompt the user one last time for confirmation to submit, or to cancel and change the form inputs. The enhancement code is integrated into the original js file's form validation code to minimise file size since the file validation code has variables needed for the enhancement code. </p>
            </li>
            <li>Slideshow on index page <a href="index.php">link to enhancement (index.html)</a>
                <p>The enhancement code creates a slideshow of images on the index page that changes images once every 3 seconds. A timer runs the change function every 3000 miliseconds. The change function changes the background image of the banner.</p>
            </li>
            <li>Highlight current page in nav bar <a href="">link to enhancement (index.html)</a>
                <p>The nav bar highlights the link the user is in with a yellow background. The js file finds the url of the current page and compares it with the url of each nav anchor href. If they match, it will be highlighted. The script also works with product pages and subproduct pages at the drop down nav.</p>
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
