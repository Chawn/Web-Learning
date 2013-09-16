<?php


   // connect to db
   
   $host = "localhost";
   $user = "root";
   $pass = "";
   $dbname = "kinderkids";
   $connection = mysql_connect($host, $user, $pass) or die ("cannot connect to DB");
   
   
   /*
   if (!$connection) {
   
   die ("cannot connect to DB");
   
   } else
   {
   
   echo "Connected to DB";
   }
   */
   
   $sql = mysql_select_db($dbname,$connection) or die ("Couldn't find db");
   
   if (!$sql) {
   
   die ("cannot select database");
   
   } else
   {
   
   echo "Connected to DB  ";
   }
   
   
   $username = $_POST['username'];
   $password = $_POST['password'];
   
   //echo '$username';
   //echo '$password';
   
if ($username && $password)
{
      
   // mysql_select_db("kinderkids",$connection) or die ("Couldn't find db");
   //   $query = "SELECT * FROM userlogin WHERE username='$username'", $connection;
   //    $query= mysql_query("SELECT * FROM userlogin WHERE username='$username'", $connection);   

   $query = mysql_query("SELECT * FROM userlogin WHERE username='$username' AND password='$password' ", $connection);
   
   $numrows = mysql_num_rows($query);
   
   
   if ($numrows > 0)
   { // code to login
   
      while ($row = mysql_fetch_assoc($query))
      {
         $dbusername =  $row['username'];
         $dbpassword =  $row['password'];
      
      }
      
      // check
      
      if($username == $dbusername && $password == $dbpassword)
      {
         echo "Welcome to kinderkids.com";
      
      } else
         echo "Incorrect password!";
         
   }
   else
   die ("That user does not exist!");
   
}
else 
die ("Please enter username and password");

?>
