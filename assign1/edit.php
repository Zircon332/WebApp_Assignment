<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit|Rentone</title>
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
        <h2>Editing</h2>
        <p class="space_bottom">Welcome to the <strong>editing page</strong>. 
        <p class="space_bottom">We respect your privacy and take protecting it seriously.<br />
            All provided informtaion will be used only for the purpose of providing service for our clients.<br />
            For more information, check out our <a href="disclaimer.php">Disclaimer page</a>.</p>
    </section>

    <article>
        <div class="form_header">
            <h2>Edit</h2>
        </div>
        <form id="register_form" action="editName.php" method="POST">
            <fieldset>
                <legend>Change Name : </legend>
                <table>
                  <tr>
                      <td><label for="pName">Previous Name: </label></td>
                      <td><input type="text" id="pName" name="pName" required="Required" maxlength="26" size="26" placeholder="Previous Name"/></td>
                  </tr>
                    <tr>
                        <td><label for="name">Name: </label></td>
                        <td><input type="text" id="name" name="name" required="Required" maxlength="26" size="26" placeholder="Name"/></td>
                    </tr>
                </table>
            </fieldset>

            <div class="form_button">
                <input id = "change" type="Submit" value="Change" />
            </div>
        </form>
      <form id="register_form" action="delete.php" method="post">
        <fieldset>
          <legend>Delete Your Membership: </legend>
          <table>
            <tr>
              <td><label for="dName">Username: </label></td>
              <td><input type="text" id="dName" name="dName" minlength="5" maxlength="26" size="26" placeholder="username"/></td>
            </tr>
            <tr>
              <td><label for="dPass">Password: </label></td>
              <td><input type="text" id="dPass" name="dPass" placeholder="Password" minlength="8" size="26"/></td>
            </tr>
          </table>
        </fieldset>
         <div class="form_button">
                <input id = "delete" type="Submit" value="Delete" />
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
