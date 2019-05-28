<!DOCTYPE html>
<html lang="en">

<head>
  <title>Joel|Rentone</title>
  <meta charset="utf-8" />
  <meta name="author" content="Joel Yong" />
  <meta name="description" content="The about page of Joel Yong" />
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
          <li class="about_name">Name: Joel Yeong Wai Hoe</li>
          <li id='aboutimg'>
            <img src='image/JoelYeong.jpg' alt='developerImage' />
          </li>
          <li class="about_id">Student ID: 100087003</li>
          <li class="about_course">Course: Bachelor of Information and Communication Technology</li>
		  <li id="about_address">Address:
            <!-- insert google map location here with https://www.embedgooglemap.net/ -->
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe id="mapframe" src="https://maps.google.com/maps?q=100%2C%20Lorong%202A1%2C%20Jalan%20Urat%20Mata%2C%20Tabuan%20Jaya%2C%2093350%20Kuching%2C%20Sarawak&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
              </div>
            </div>
          </li>
          <li class="about_personalinfo">
            <h2>Personal Information:</h2>
            <p>My name is Joel Yeong Wai Hoe. I am 22 years old and currently enrolled in Bachelors of Communication and Technology at Swinburne University Of Technology Sarawak.
            Born and raised in Kuching, I have found a hobby in indulging in the various foods and drinks that are offered throughout the city. Other than food, I enjoy playing video games
          and participating in sports. A particular goal of mine would be to be involved in big projects mainly in the IT field that can bring major innovative changes to Kuching.</p>
          </li>
          <li class="about_contribution">Contribution:
            <table>
              <tr>
                <th>Contribution</th>
                <th>Description</th>
              </tr>
              <tr>
                <td>index.html</td>
                <td>Edited content to have space for images and descriptions</td>
              </tr>
              <tr>
                <td>nav bar with dropdown menu</td>
                <td>Created navigation bar with a dropdown menu and customized it in the css.</td>
              </tr>
              <tr>
                <td>Report</td>
                <td>Created sitemap to show hierarchical structure of the website.</td>
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
