<?php
  session_start();
  if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    $logout = "<li><a href='logout.php'>Logout</a></li>";
    $view = "<li><a href='view.php'>View Other Members</a></li>";
  }  

?>

<ul>
    <li><a href="index.php">Home</a></li>
    <li>
		<div id='navcont'>
			Products
            <div id='productlist'>

			</div>
		</div>
	</li>
    <li><a href="enquiry.php">Enquiry</a></li>
    <li><a href="disclaimer.php">Disclaimer</a></li>
    <?php 
  if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
     echo $logout;
     echo $view;
  }
  ?>
</ul>