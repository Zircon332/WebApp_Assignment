
<?php
  if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    $regbox = "<h1>Edit your membership!</h1>
               <button class='button' onclick=\"window.location.href='edit.php'\"><span>EDIT</span></button>";
  }else{
    $regbox = "<h1> Register today and become a member!</h1>
    <h2>Get news and latest information from your favourite rental store!</h2>
    <button class='button' onclick=\"window.location.href='register.php'\"><span>REGISTER HERE</span></button></br>
	<a href='login.php'>Already a member? Login</a></br></br>";
  }  

?>

<aside id="regbox"> <?php echo $regbox; ?> </aside>
