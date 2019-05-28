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
        <h2>ENQUIRY</h2>
        <p class="space_bottom">Welcome to the <strong>enquiry page</strong>. This is where you place your booking for renting an instrument.</p>
        <hr />
        <p class="space_bottom">Haven't decided on an instrument yet? <a href="index.php#menu">Click here to check them out.</a></p>
        <hr />
        <p class="space_bottom">All fields, unless stated otherwise, are required to be filled in, as they are necessary for us to safely deliver you.</p>
        <hr />
        <p class="space_bottom">We respect your privacy and take protecting it seriously.<br />
            All provided informtaion will be used only for the purpose of providing service for our clients.<br />
            For more information, check out our <a href="disclaimer.php">Disclaimer page</a>.</p>
    </section>

    <article>
        <div class="form_header">
            <h2>ENQUIRY</h2>
        </div>
        <form id="enquiry_form" enctype="text/plain" method="post" action="confirm.php">
            <label for="subject">Subject: </label>
            <input type="text" id="subject" name="subject" required="Required" maxlength="40" size="40" value="RE: Enquiry on [product name]" />

            <fieldset>
                <legend>Personal Detail : </legend>
                <table>
                    <tr>
                        <td><label for="fname">Name: </label></td>
                        <td><input type="text" id="fname" name="fname" required="Required" maxlength="26" size="26" placeholder="First Name" pattern="^[a-zA-Z]+$" />
                            <input type="text" id="lname" name="lname" required="Required" maxlength="26" size="26" placeholder="Last Name" pattern="^[a-zA-Z]+$" /></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email address: </label></td>
                        <td><input type="text" id="email" name="email" required="Required" size="25" placeholder="example@email.com" /></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone Number: </label></td>
                        <td><input type="text" id="phone" name="phone" placeholder="0123456789" required="Required" maxlength="10" size="10" /></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
                <legend>Address : </legend>
                <table>
                    <tr>
                        <td><label for="street">Street address: </label></td>
                        <td><input type="text" id="street" name="street" required="Required" maxlength="40" size="22" placeholder="Street Address" /></td>
                    </tr>
                    <tr>
                        <td><label for="city">City/town: </label></td>
                        <td><input type="text" id="city" name="city" required="Required" maxlength="20" size="22" placeholder="City / Town" /></td>
                    </tr>
                    <tr>
                        <td><label for="state">State: </label></td>
                        <td><select id="state" name="state" required='Required'>
                              <option value="">Choose</option>
                                <optgroup label="States">
                                    <option value="johor" selected="selected">Johor</option>
                                    <option value="kedah">Kedah</option>
                                    <option value="kelantan">Kelantan</option>
                                    <option value="malacca">Malacca</option>
                                    <option value="negeri_sembilan">Negeri Sembilan</option>
                                    <option value="pahang">Pahang</option>
                                    <option value="penang">Penang</option>
                                    <option value="perak">Perak</option>
                                    <option value="perlis">Perlis</option>
                                    <option value="sabah">Sabah</option>
                                    <option value="sarawak">Sarawak</option>
                                    <option value="selanggor">Selanggor</option>
                                    <option value="terengganu">Terengganu</option>
                                </optgroup>
                                <optgroup label="Federal Territories">
                                    <option value="kuala_lumpur">Kuala Lumpur</option>
                                    <option value="labuan">Labuan</option>
                                    <option value="putrajaya">Putrajaya</option>
                                </optgroup>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="postcode">Postcode: </label></td>
                        <td><input type="text" id="postcode" name="postcode" pattern="[0-9]{5}" maxlength="5" size="5" placeholder="12345" required="Required" /></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset>
                <legend>Rental : </legend>
                <table>
                    <tr>
                        <td><label for="product">Product: </label></td>
                        <td>
                            <select id="product" name="product" required="Required" onchange="data_transfer()">
                              <option value="">Choose</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="duration">Rental duration: </label></td>
                        <td><input type="number" id="duration" name="duration" required='Required' size="5" placeholder="XX" />months</td>
                    </tr>
                </table>
            </fieldset>

            <p><label for="comments">Comment: </label><br />
                <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Enter comments here. (Not required)"></textarea>
            </p>

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
