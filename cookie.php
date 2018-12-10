<?php  // Cookies
   setcookie("name", "John Watkin", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);


   	if( isset($_COOKIE["name"]))
    	echo "Welcome " . $_COOKIE["name"] . "<br />";
 
 	else
    	echo "Sorry... Not recognized" . "<br />";

    // Delete Cookie

    setcookie( "name", "", time()- 60, "/","", 0);
   setcookie( "age", "", time()- 60, "/","", 0);
   

?>
<html>
   
   <head>
      <title>Setting Cookies with PHP</title>
   </head>
   
   <body>
      <?php echo "Set Cookies"?>
   </body>
   
</html>