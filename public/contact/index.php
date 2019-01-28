<?php require_once('../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/header.php'); ?>


<title> The Evolution | Contact Us </title>


<br>
<br>
	<div class="container">
	<h4 id="mainTitle"> <strong>Send Us A Message</strong></h4>
	<hr color="#d4b24d">
	</div>
	<br>
	<br>
<div class="fluid-container" id="formPage">


	<div class="container" id="formBox">
	<br>

	<form>
		  <div class="form-group">
		    <label for="exampleInputName"><b>Name</b></label>
		    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Full Name">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1"><b>Email address</b></label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    <small id="emailHelp" class="form-text" style="color:white">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputText"><b>Message</b></label>
		    <textarea type="text" class="form-control" id="exampleInputText" placeholder="Your Message Here..." rows="8"></textarea>
		  </div>
		  <button type="submit" class="btn" id="submitBtn">Submit</button>
	</form>

	<br>

	</div>

</div>

<br>
<br>
<?php include(SHARED_PATH . '/footer.php'); ?>
