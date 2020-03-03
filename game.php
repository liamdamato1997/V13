	<?php include('common.php'); //Calling the class from another PHP file called common.php
		outputHeader("Home");  //Calling Function header
		outputBannerNavigation("Game");?> <!-- Passing the webpage name to the outputBannerNavigation function-->

		 <div class="container"> <!--Bootstrap Class -->  
		  <h1>Highway Car Game</h1>
		  <button type="button" onclick="start()" class="btn btn-dark">Start</button>
		  <button type="button" onclick="easy()" class="btn btn-success">EASY</button>
		  <button type="button" onclick="medium()" class="btn btn-warning">MEDIUM</button>
	      <button type="button" onclick="hard()" class="btn btn-danger">HARD</button>
		  <div id = "score">Score</div>
		  <canvas id="myCanvas" width="580px" height="600px"></canvas>
          <div id="buttonKeys" style="text-align:center;width:480px;">
		  <button id="btn" onclick="carUp()" ><img src = "img/up.png"></button><br><br>
		  <button id="btn" onclick="carLeft()"><img src = "img/left.png"></button>
		  <button id="btn" onclick="carRight()"><img src = "img/right.png"></button><br><br>
		  <button id="btn" onclick="carDown()"><img src = "img/down.png"></button>
       </div>
      </div>
	  
	 <script>
		 
		    var onCars = []; //Creating object for the cars
		    var userDriver;  //The user car
		    var time; //Time variabe for the score
		    var speed;
		    userDriver = new drawCars(200,100,500,100,"img/player.png") //The user car
		    var count = 0; 
            var canvas = document.getElementById("myCanvas"); //Creating the canvas
            var ctx = canvas.getContext("2d");
            var time;
		 
		 function start(){
		    setInterval(updateGameArea,30); //Setting the interval
		 }

		function clear (){
			ctx.clearRect(0,0,canvas.width,canvas.height);	 //Clearing the canvas
		}
		 
		function drawCars(x,w,y,h,image){ //Displaying the car on the canvas function
			 this.x = x;  //Giving the X co-ordinates
			 this.y = y;  // Giving the Y co - ordinates
			 this.w = w;  // Setting the width
			 this.h = h;  // Setting the hight 
			 this.speedX = 0; //Setting the speed to go righ or left
			 this.speedY = 0; //Setting the speed to go up or down
			 this.updateArea = function(){ // Drawing the image on the canvas
		     var policeCar; //Creating variable for the police car
			 
				 	 
		     policeCar = new Image(); //Creating image for the police
		     policeCar.src = image; // Creating image for the user icon
				 
			 
		     ctx.drawImage(policeCar,this.x,this.y,this.w,this.h); //Giving settings for the police car
		     
			  
		  }
			 this.playerControl = function(){ //Function to move the car around
				 this.x += this.speedX;
				 this.y += this.speedY;
			 } 
	   }
		   
	   function generateCars (){ //Randomising the cars position
		      count ++;
			  var moveX;
			  clear(); 
		  	if(count % 100 ===0){
				moveX  = Math.floor(Math.random() * 500);  //Math . random to give randomised value for X
			    onCars.push(new drawCars(moveX,90,70,60,"img/4.png")); //Inserting the car in the canvas
			 } 
		    for(x = 0; x < onCars.length; x++){ //Incrementing the y co-ordinates
			   time = x;
			   onCars[x].y++; //moving the car forward
			   onCars[x].updateArea();
			   document.getElementById("score").innerHTML = "Time : " + time; //Number of cars dodged
				
		    if(onCars[x].y === 200){ //Shifting the incoming cars
			   onCars[x].shift();
			}  	
			 
			if(userDriver.x == onCars[x].x || userDriver.y == onCars[x].y){  //Detacting collision
			  time = x;
              document.getElementById("score").innerHTML = "Game Over - Total Score " + x;
			  var player = localStorage.time = time; //Saving the time of the player
			  player.push(x);
			  return false;
            }
				
				
		   }  
			  userDriver.playerControl(); //Setting the user position
			  userDriver.updateArea(); //Inserting the user car into the canva	 
		
		}
		   
		function updateGameArea(){ //generating incoming cars by calling the function
		     generateCars();
			   
		}
		  

		function carUp() { // Directing the car up
			userDriver.speedY -= speed
; 
		}

		function carDown() { // Directing the car down
			userDriver.speedY += 1;
		}

		function carLeft() { // Directing the car left
			userDriver.speedX -= 1; 
		}

		function carRight() { //Directing the car to the right
			userDriver.speedX += 1; 
		}
		 
		function medium (){ //Setting the speed depending on the level of complexity of the game
			speed = 2;
		}
		 
	   function hard (){ //Setting the speed depending on the level of complexity of the game
		    speed = 4;
		}
		 
	    function easy (){ //Setting the speed depending on the level of complexity of the game
		    speed = 1;
		}
		  
		</script>

	 <?php outputFooter()?> <!--Calling function from the common class to display the footer -->

