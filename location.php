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
      <section  class="header-location">
          <nav>
          	  <a><img src="Images/logotorrijos.png"></a>
          	  <div class="nav-links" id="navLinks"> 
                <i class="fa fa-times" onclick="hideMenu()"></i>
                   <ul>
                      <li><a href="index.php">Hompage</a></li>
                      <li><a href="location.php">tour-location</a></li>
                      <li><a href="tour.php"> About Poctoy</a></li>
                   </ul>
              </div>
              <i class="fa fa-bars" onclick="showMenu()"></i>
          </nav>
        
     
     <div class="text">
       
         <h1> The Location of Poctoy White Beach In Marinduque </h1><br>
              <br>
              <p>Figure 1: The Location of Torrijos In Marinduque</p>
           <br>
           <a>
                   <img src="Images/Location1.png">
           </a>
              <br>
              <p>Figure 2: It shows the direction of the way from National Highway to the arc of Poctoy white beach up to Beach.</p>
              <br>
            <a>
                 <img src="Images/Location2.png">
           </a>
         
  </div>
 
       </section>
          
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
