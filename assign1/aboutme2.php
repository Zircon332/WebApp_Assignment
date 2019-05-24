<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jun Jie|Rentone</title>
  <meta charset="utf-8" />
  <meta name="author" content="Wong Jun Jie" />
  <meta name="description" content="The about page of Wong Jun Jie" />
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
    <div id='aboutdetail'>
        <ul>
          <li class="about_name">Name: Wong Jun Jie</li>
          <li id='aboutimg'>
            <img src='image/JunJie.jpg' alt='developerImage' />
          </li>

          <li class="about_id">Student ID: 101215892</li>
          <li class="about_course">Course: Bachelor in Computer Science</li>
		      <li id="about_address">Address:
            <!-- insert google map location here with https://www.embedgooglemap.net/ -->
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe id="mapframe" src="https://maps.google.com/maps?q=sunny%20hill&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
              </div>
            </div>
          </li>
          <li class="about_personalinfo">
            <h2>Personal Information:</h2>
            <p>My name is Wong Jun Jie a 19 years old male Malaysian Chinese. I used to live in a peaceful little coastal city named Miri. Currently, I am studying in my first year of degree for Bachelor of Computer Science (BoCS) in Swinburne University of Technology, Sarawak Campus. If circumstances are in my favour, I would be majoring in two sub-degrees for my program, namely BoCS majoring in Cyber Security and Software Development. I have a few types of hobbies ranging from conventional ones like reading, and unconventional ones like programming or attempting to learn how to program in my free time.</p>
          </li>
          <li class="about_contribution">Contribution:
            <table>
              <tr>
                <th>Contribution</th>
                <th>Description</th>
              </tr>
              <tr>
                <td>Sub product pages</td>
                <td>Created sub product pages under products pages, made the overall design and designed how content will be positioned</td>
              </tr>
              <tr>
                <td>Music in homepage</td>
                <td>Implemented, styled and positioned the mp3 music in index.html</td>
              </tr>
              <tr>
                <td>product.html</td>
                <td>Added content for products under brass category</td>
              </tr>
              <tr>
                <td>Company logo</td>
                <td>Made the logo for the company, which is used in both the header and footer</td>
              </tr>
              <tr>
                <td>Footer company description</td>
                <td>Wrote the description of the company in the footer.</td>
              </tr>
            </table>
          </li>
        </ul>
      </div>
  </article>
  <br />

  <hr />
  <footer>
      <?php include_once("includes/footer.php");?>
  </footer>

  <script src="script/script.js"></script>
  <script src="script/enhancements.js"></script>
</body>

</html>
