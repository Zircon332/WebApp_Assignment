<!DOCTYPE html>
<html lang="en">

<head>
  <title>KH|Rentone</title>
  <meta charset="utf-8" />
  <meta name="author" content="Wong Kah Heng" />
  <meta name="description" content="The about page of Wong Kah Heng" />
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
    <div id='aboutdetail'>
        <ul>
          <li class="about_name">Name: Wong Kah Heng</li>
          <li id='aboutimg'>
            <img src='image/KH.jpg' alt='Kah Heng' />
          </li>

          <li class="about_id">Student ID: 101212039</li>
          <li class="about_course">Course: Bachelor of Computer Science</li>
    		  <li id="about_address">Address:
            <!-- insert google map location here with https://www.embedgooglemap.net/ -->
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe id="mapframe" src="https://maps.google.com/maps?q=floridale%20condo&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
              </div>
            </div>
          </li>
          <li class="about_personalinfo">
            <h2>Personal Information:</h2>
            <p>My name is Wong Kah Heng, an 18 year old student in Swiburne, Sarawak. I was born in Brunei, grew up in Brunei, yet still a Malaysian due to circumstances.
            At the age of 16, I went back to Malaysia to continue my studies in University in Kuching. Currently, I'm in the first year degree of Bachelor of Computer Science
            with my unrealistic dream of becoming rich in the future. My hobbies include playing guitar, learning game creation, playing games and watch movies/anime.</p>
          </li>
          <li class="about_contribution">Contribution:
            <table>
              <tr>
                <th>Contribution</th>
                <th>Description</th>
              </tr>
              <tr>
                <td>enquiry.html</td>
                <td>Created the page, created the form and all form elements, and the design of the page</td>
              </tr>
              <tr>
                <td>product2</td>
                <td>Added the contents for product2 pages for string instruments</td>
              </tr>
              <tr>
                <td>banner</td>
                <td>Designed the banner for all pages of the site</td>
              </tr>
              <tr>
                <td>aboutme.html maps</td>
                <td>Implemented the iframes embed map to show the location of each member in aboutme pages</td>
              </tr>
              <tr>
                <td>enhancement.html</td>
                <td>Created enhancement.html with links to other sites</td>
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
