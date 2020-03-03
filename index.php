<?php include('common.php'); //Calling the header from another PHP file called common
    outputHeader("My Game Website - Home"); //Calling Function
    outputBannerNavigation("Home"); //Calling Function
    ?>
    <!-- Calling the banner class from the CSS file-->
   <section>
    <header class="banner">
      <h1>The Need To Speed</h1>
        <p>Can you handle the stress and keep up with the highway ?</p>
        <a href="game.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Play Now</a> <!-- Bootstrap Button -->
        <a href="sign.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sign Up</a><!-- Bootstrap Button -->
     </header>
    </section>
    <section class="boxes"> <!--class to structure the section -->
      <div class="boxbottom"> <!--class to create box-->
        <h2>Top Player</h2>
        <p>Top score of the week - GhostBoyz65</p>
        <p><b>Score : 154 Miles</b></p>
      </div>
      <div class="boxbottom">
        <h3>Top Legend</h3>
        <p>Top score of all time - <br>Ninja567</p>
        <p><b>Score : 300 Miles</b></p>
      </div>
      <div class="boxbottom">
        <h3>Best Newcomer</h3>
        <p>Best Newcomer : UnknwnPlayer457</p>
        <p><b>Score : 120 Miles</b></p>
      </div>
      <div class="boxbottom">
        <h4>Development</h4>
        <p>Please note, updates for the new version are in place and will be lunched on January 2019</p>
      </div>
  </section>
 <?php outputFooter()?> <!--Calling the function from common class -->
