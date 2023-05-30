<?php
 include 'header.php';
?>

<div class="jumbotron"style="background: rgba(0, 0, 0, 0.6); margin-bottom: 0px;">
	<h1 class="text-white">Add Your Hotel Details,<br> Welcome to <span style="color:green;">Food Zone'</span></h1>
	<p class="pt-3 text-white" style="font-size: 21px;">Create an Account and add your Food</p>
</div>
  
<style>
 body {
  background: url(https://i.pinimg.com/564x/68/4b/b4/684bb4bc6b1bb645e0d0fa7d62171d93.jpg) no-repeat center center fixed;
	height: 100%;
	width: 100%;
	position: relative;
	background-size: cover;
 }
  
</style>
<div class="jumbotron"style="background: rgba(0, 0, 0, 0.6); margin-bottom: 0px;">
   <div class="container">
   	<div class="row">
   	<div class="login col-md-6">

      <?php
          if (isset($_GET['msignup'])) {
            $errorcheck = $_GET['msignup'];
            if ($errorcheck == "empty"){
              echo "<p class='text-center alert alert-danger'>You'll Need To Fill Up All The Details</p>";
            }
            if ($errorcheck == "char"){
              echo "<p class='text-center alert alert-danger'>Hotel Name Should Only Contain alphabets</p>";
            }
            if ($errorcheck == "user"){
              echo "<p class='text-center alert alert-danger'>Username Already Taken, Kindly Use a Different One</p>";
            }
            if ($errorcheck == "email"){
              echo "<p class='text-center alert alert-danger'>Enter a Valid Email Address</p>";
            }
            if ($errorcheck == "invalidcontact"){
              echo "<p class='text-center alert alert-danger'>Enter a Valid Contact Number</p>";
            }
            if ($errorcheck == "contact-alreadyexists"){
              echo "<p class='text-center alert alert-danger'>Contact Number Already Registered</p>";
            }
            if ($errorcheck == "checkemail"){
              echo "<p class='text-center alert alert-danger'>Email Address Already Registered</p>";
            }
          }
      ?>

   	  <form method="POST" action="inc/msignup.inc.php" class="pb-5">
       <legend style="border-radius: 20px;background-color: black;
        color: black; font-size: 20px; font-weight: 500; margin: 0 auto;" class="pl-4 pr-4 pb-3 pt-1 text-white"> <h3 class="text-center">Create Account</h3>
      	<div class="form-group">
      	 <label class="text-white">Hotel Name</label>
      		<input type="text" name="fname"  placeholder="Your Hotel Name" class="form-control">
      	</div>
      	<div class="form-group">
      	 <label class="text-white">Username</label>
      		<input type="text" name="uname"  placeholder="username" class="form-control">
      	</div>
      	<div class="form-group">
      	 <label class="text-white">Email</label>
      		<input type="text" name="email"  placeholder="Hotel Email" class="form-control">
      	</div>
         <div class="form-group">
          <label class="text-white">Restaurent Location/Place</label>
            <input type="text" name="rplace"  placeholder="Restaurent Place" class="form-control" autocomplete="off">
         </div>
      	<div class="form-group">
      	 <label class="text-white">Contact No</label>
      		<input type="text" name="contact"  placeholder="Contact Number of Hotel" class="form-control">
      	</div>
      	<div class="form-group">
      	 <label class="text-white">Address</label>
      		<input type="text" name="address"  placeholder="Address of Hotel" class="form-control">
      	</div>
      	<div class="form-group">
      	 <label class="text-white">Password</label>
      	    <input type="password" name="pwd"  placeholder="password" class="form-control">
             <input type="hidden" name="status" value="disabled">
      	</div>
      		<button class="btn btn-default btn-md" name="submit">Register</button>
            <span class="pl-2 pr-2" style="font-weight: 700; font-size: 15px;">Or</span>
            <a class="btn btn-default btn-md" href="mlogin.php">Login</a>
      	</legend>
      </form>
     </div>
     </div>
    </div>
</div>


<?php
 include 'footer.php';
?>