<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ryan|Rentone</title>
  <meta charset="utf-8" />
  <meta name="author" content="Ryan Yap" />
  <meta name="description" content="The about page of Ryan Yap" />
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

  <article>
    <div id='aboutdetail'>
        <ul>
          <li class="about_name">Name: Ryan Yap</li>
          <li id='aboutimg'>
            <img src='image/Ryan.jpg' alt='developerImage' />
          </li>
          <li class="about_id">Student ID: 101215465</li>
          <li class="about_course">Course: Computer Science</li>
		      <li id="about_address">Address:
            <!-- insert google map location here with https://www.embedgooglemap.net/ -->
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe id="mapframe" src="https://maps.google.com/maps?q=8k%20jalan%20pisang%20kuching%20sarawak%20&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
              </div>
            </div>
          </li>
          <li class="about_personalinfo">
            <h2>Personal Information:</h2>
            <p>My name's Ryan and I'm a 19 year old chinese male. I was born in Kuala Lumpur but moved to Kuching as a child and have been
			living here ever since. I'm currently in my first semester of my Data Science degree in Swinburne University and hope to make the best
			of my semesters. My hobbies include gaming, listening to music and running.</p>
          </li>
          <li class="about_contribution">Contribution:
            <table>
              <tr>
                <th>Contribution</th>
                <th>Description</th>
              </tr>
              <tr>
                <td>index.html</td>
                <td>Created content and links for index.html. Also created grid design <br/>layout and gold colour based off banner colours. Created
				<br/> button and hover css effects. Resized images</td>
              </tr>
              <tr>
                <td>Product Pages</td>
                <td>Created grid layout and links for product pages. Added appropriate padding<br/> and margin in CSS. Created hover effects. Resized images
				<br/> for product pages.</td>
              </tr>
              <tr>
                <td>aboutus.html</td>
                <td>Created grid layout and CSS for aboutus.html. Resized images.</td>
              </tr>
              <tr>
                <td>aboutme pages</td>
                <td>Created content for about me page. Added CSS for design layout.</td>
              </tr>
			  <tr>
                <td>Disclaimer page</td>
                <td>Added content for disclaimer page.</td>
              </tr>
			  <tr>
                <td>header and footer</td>
                <td>Added CSS enhancement effects for products in nav bar. Created <br/>facebook account for link in footer. Adjusted links</td>
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
