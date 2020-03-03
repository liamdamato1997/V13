    <?php include('common.php'); //Calling the class from another PHP file called common.php
        outputHeader("My Game Website - Home"); //Calling Function header 
        outputBannerNavigation("Login / Sign Up"); //Calling Function navigation
        ?>
    
        <div class="container"> <!--Bootstrap Class -->
        <h3 class="page-title">Sign Up</h3>
         <form name="myForm" id="joinForm" method="post"> <!--Running the validation form -->
            <br><label>Name</label><br>
            <input action="/action_page.php" name="nameUser" value="" id="name" placeholder="Name" required>  <!--Username output -->
            <br><label>Surname<br></label> <!--Username label -->
            <input action="/action_page.php" value="" id="surname" placeholder="Surname" required> <!--Username Placeholder -->
            <br><label>Email</label><br>
            <input action="/action_page.php"  type="email" id="email" placeholder="Email Address" required> <!--Getting the user email -->
            <br><label>Date Of Birth<br></label>
            <input action="/action_page.php" type="date" id="dob" placeholder="DD / MM /YYYY" required> <!--Getting the Date of birth -->
            <br><label>Gender : <br></label>
            <input type="radio" name="gender" id="maleRadioBtn" > 
            <label id="gender-male">Male</label>
            <input type="radio" name="gender" id="femaleRadioBtn">
            <label id="gender-female">Female</label>
             <br><label>Create Password<br></label>
             <input action="/action_page.php" type="password" id="pass" placeholder="Create Password" required> <!--Creating password -->
            <h4>Terms and Conditions</h4>
            <input type="checkbox" required>
            <label id="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
            <input type="submit" onclick="save()" value="submit"> <!--Calling the save function -->
            <!--Bootstrap button -->
            </form>
            <p id="saveResult"></p> <!--Shows if the form has been successfully saved -->
            </div>

            <script>
            //Displays the user's name if it has been set.
        function playerName(){
           if(localStorage.userSign != undefined)
              alert("Hello : " + localStorage.userSign);
         }
                
         //Stores name when user clicks button
        function save(){
           var player = {};
		   var nameValidation = document.getElementById("name").value;
		   var surnameValidation = document.getElementById("surname").value;
		   var emailValidation = document.getElementById("email").value;
		   var dobValidation = document.getElementById("dob").value;
		   var passwordValidation = document.getElementById("pass").value; 
			
			if (nameValidation == "") {
				alert("Name must be filled out");
				return false;
               }
			
		    if (surnameValidation == "") {
				alert("Surname must be filled out");
				return false;
               }
			
			if (dob == "") {
				alert("Please input Date Of birth");
				return false;
               }
			
			if (emailValidation == "") {
				alert("Please input Email");
				return false;
               }
			
			if (passwordValidation == "") {
				alert("Password must be created");
				return false;
               }
		   
		   player.name = document.getElementById("name").value;  //Storing the name
		   player.lastName = document.getElementById("surname").value; //Storing the surname
		   player.userEmail = document.getElementById("email").value; //Storing the email
		   player.age = document.getElementById("dob").value; //Sotring the DOB
		   player.password = document.getElementById("pass").value; //Storing the password

		   localStorage[player.userEmail] = JSON.stringify(player); //Stringify the user player
			  
           document.getElementById("saveResult").innerHTML = "<b> Sign Up Successfull.</b>"; //Changing the saveResult id
		   alert("Hello : " + document.getElementById("joinForm").nameUser.value); //Prompting the user with alert box
		}

        </script>
            

     <?php outputFooter() ?> <!--Calling function from the common class to display the footer -->