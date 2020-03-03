<?php include('common.php'); //Calling the class from another PHP file called common.php
    outputHeader("My Game Website - Home"); //Calling Function header
    outputBannerNavigation("Score");  //Inserting the Score page in the function
    ?>
  <div class="container">  <!-- Calling container class from bootstrap-->
  <img src="./img/win.jpg" class="rounded mx-auto d-block" alt="Picture of trophy">  <!--Adding Picture-->
   <h1>Your Top 5 Score</h1>
    <div  class="grid-container">  <!-- Using Grid to display the score in table form-->
      <?php include('time.php'); // Calling the clas time
      bannercolour();?> <!--Calling the function from the time.php class -->
      <div id="grid-item1">1 :Top Score 1 </div>  <!-- From 1st Page to the  5-->
      <div id="grid-item2">2 :Top Score 2</div> <!--Grid Layout -->
      <div id="grid-item3">3 :Top Score 3 </div>  
      <div id="grid-item4">4 :Top Score 4 </div>
      <div id="grid-item5">5 :Top Score 5</div>
    </div>
	  <input type="submit" onclick="score()" value="Refresh">  <!-- Calling the function score-->
   </div>

  <script>
  
  function score (){ //Function score
   var cars = [5,7,3,9]; //Pre defined array list wil values
   var time = localStorage.getItem("time");     // getting the user score
   cars.push(time); //Storing the user score in array

   cars.sort(function(a, b){return b-a}); //Sorting the scores in descending order
   document.getElementById("grid-item1").innerHTML = "1 :  Score : " + cars[0]; //Displaying the first place
   document.getElementById("grid-item2").innerHTML = "2 :  Score : " + cars[1]; //Displaying the second place
   document.getElementById("grid-item3").innerHTML = "3 :  Score : " + cars[2]; //Displaying the third place
   document.getElementById("grid-item4").innerHTML = "4 :  Score : " + cars[3]; //Displaying the fourth place
   document.getElementById("grid-item5").innerHTML = "5 :  Score : " + cars[4]; //Displaying the fifth place
 }


  </script>
  
 <?php outputFooter() ?><!--Calling function from the common class to display the footer -->
