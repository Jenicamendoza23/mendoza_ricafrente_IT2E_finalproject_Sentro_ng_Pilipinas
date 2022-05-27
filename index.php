 <!DOCTYPE html>
 <html>
 <head>
 	<meta name="viewport" content="with=device-width, initial-scale=1.0">
 	  <title>Poctoy White Beach</title>
 	  <link rel="stylesheet"href="style.css">
 	  <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"rel="stylesheet">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
      <section  class="header">
          <nav>
          	  <a><img src="Images/logotorrijos.png"></a>
          	  <div class="nav-links" id="navLinks"> 
                <i class="fa fa-times" onclick="hideMenu()"></i>
                   <ul>
                   	  <li><a href="index.php">HOME</a></li>
                   	  <li><a href="location.php">LOCATION</a></li>
                      <li><a href="tour.php"> View-Poctoy-Beach</a></li>
                   </ul>
              </div>
              <i class="fa fa-bars" onclick="showMenu()"></i>
          </nav>

  <div class="text-box">
      <h1>Poctoy White Beach Torrijos Marinduque</h1>
      <p>Poctoy White Beach is one of the popular beaches in the Philippines, located in the coastal town of Torrijos in Marinduque. The beach features a kilometer stretch of fine white sand and pristine blue water that is perfect for swimming and snorkeling. The place also gives a scenic view of Mount Malindig, the highest point in the province that is very famous among beginner mountain climbers. Poctoy White Beach commonly reaches its peak during the Holy Week season because the province of Marinduque is known for its Moriones Festival, one of the oldest and most religious festivals in the country, which happens during this week.</p>
      <br>
      <a href="tour.php" class="hero-btn"> View more</a>
</div>
   </section>
     
<!----- text below home page ----->
<section class="hometext">
    <h1> White Beach Contact </h1><br>
    <h3>Gmail: whitebeach.mrd@gmail.com</h3>
   
    <div class="icons">
         <i class="fa fa-facebook"></i>
         <i class="fa fa-twitter"></i>
        <i class="fa fa-linkedin"></i>
    </div>
      </section>
    
    <section class="row">
        <div class="hometext-col">
              <h3> Social Media Contact </h3>
            <p>Facebook: Poctoy White Beach torrijosMRD</p>
            
            <p>Twitter: @PoctoyWhiteBeachTorrijosMRD</p>
        
            <p>Linked: PoctoyWhiteBeachTorrijosMRD</p>
            
        </div>
    
</section>
<!------ JavaScript for toggle Menu------>
<script>
  
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
      navLinks.style.right = "0";
    }
    function hideMenu(){
      navLinks.style.right = "-200px";
    }

</script>



 </body>
 </html>
