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
    <div id="banner2">
    </div>

    <section>
        <h2>Search</h2>
    </section>

    <article>
        <div class="form_header">
            <h2>Search</h2>
        </div>
        <form id="enquiry_form" enctype="text/plain" method="post" action="searched.php">
            <fieldset>
                <legend>Search for your purchase : </legend>
                <table>
                    <tr>
                        <td><label for="fname">Name: </label></td>
                        <td><input type="text" id="fname" name="fname" required="Required" maxlength="26" size="26" placeholder="First Name" pattern="^[a-zA-Z]+$" />
                            <input type="text" id="lname" name="lname" required="Required" maxlength="26" size="26" placeholder="Last Name" pattern="^[a-zA-Z]+$" /></td>
                    </tr>
              </table>
          </fieldset>
            <div class="form_button">
                <input type="Reset" value="Reset" />
                <input id = "submit" type="Submit" value="Submit" />
            </div>
        </form>
    </article>

    <aside id='enquiryside'>
        <h3>Still need help? Contact us at: </h3>
        <p>Email: <a href="mailto:Rentone@gmail.com">Rentone@gmail.com</a></p>
        <p>Phone: <a href="tel:+60123456789">0123456789</a></p>
    </aside>


    <footer>
        <?php include_once("includes/footer.php");?>
    </footer>

    <script src="script/script.js"></script>
    <script src="script/enhancements.js"></script>
</body>

</html>
