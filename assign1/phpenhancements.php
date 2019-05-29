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

    <div id="banner2">
    </div>

    <article class="enhancements">
        <h2>List of enhancements</h2>
        <ol>
            <li>User Management Module
              <p>The User Management Module allows users to register, which is adding user data into a table in the database. It also allows login, which is matching and then taking data from the database, then using a session super global to keep track on if the user is currently logged in or not. This allows member only links to be displayed when members are logged in. Other than that, users are also able to edit their names, which is changing values in the database from the webpage. It searches for the old name in the database and changes it with what the user desires. Users are also able to view other members on the webpage, but only their names and the date they joined. This prevents security breaches. Lastly, the user can relinquish their membership, which is deleting values on the database from the webpage.</p>
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
