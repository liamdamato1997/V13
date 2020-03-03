<?php include('common.php');  
    outputHeader("My Game Website - Home"); 
    outputBannerNavigation("Login / Sign Up");
    ?>
    <!-- Login container class to structure the page format -->
     <body onload="loginVerify()"><!-- Loading the function login Verify to check if the email is listeed in the local storage. -->
     <div class="loginContainer"> <!-- Bootstrap Class -->
     <h1 class="page-title">Login</h1> <!-- Setting the titgle of the page -->
	 <div id="loginResult"></div> <!-- Displaying the result if the login is correct. -->
     <form id="playerLogin" onsubmit=" return false"> <!--  -->
          <label><b>Email</b></label> <!--Username Label -->
          <input  type="email" id="userEmail" value="" placeholder="Enter Email" name="email" required>  <!--Username Placeholder -->
          <label><b>Password</b></label>
          <input type="password" id="userPassword" value="" placeholder="Enter password" name="psw" required> <!--Password Placeholder -->
          <input type="submit" onclick="loginUser()">
          <a href="sign.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sign Up</a> <!--Directs you to the sign up form-->
    </form>  
	
    </div>
    <script>
	    function loginVerify (){
		   if(localStorage.loggedInUserEmail !== undefined){ // Checking if the email used has been defined in the local storage
		   var playerLogin = JSON.parse(localStorage[localStorage.loggedInUserEmail]); //Passing the email 
		   document.getElementById("loginResult").innerHTML = playerLogin.name + " Logged in"; //Displaying the login is successfull
		   }	
		}
		
		function loginUser (){
			var email = document.getElementById("userEmail").value; //Getting the element from the user input
			
			if(localStorage[email] === undefined){ //Checking if the email is listes in the local storage
				document.getElementById("fail").innerHTML = "Email is not listes, Please try again"; //If the email is not found displaying error.
				return;
			}else{
			 var player = JSON.parse(localStorage[email]); //Parsing the email to object
			 var password = document.getElementById("userPassword").value; // Getting the input from the user

			 if(password === player.password){ //Checking the password is the same in the local storage
			   document.getElementById("loginResult").innerHTML = player.name + " : Login Complete"; //Displaying login is successfull
			 }else{
			   document.getElementById("loginResult").innerHTML = "Password is incorrect, please try again.";  //Displaying login failure
			 }
			 }
		}

   </script>
   
    
 <?php outputFooter()?> <!--Calling function from the common class to display the footer -->