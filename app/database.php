<?php

//We use a TRY-CATCH  block here in case for some reason our database fails to connect
//In the case it fails to connect, the error message will be printed to help us debug.
//Normal execution of the program will happen in the TRY block. If there is and error
//during code execution in the try block an exception error is thrown and caught in the
//catch block, in this case a PDOException
try {
    //First we set the connection varialbes $user is the username to be used to connect
    // to your database and the $pass is the password associated with that username.
    //You should make sure the host name and dbname are set to the one that you are using
    //for this project
    
    $user = "root";
    $pass = "";
    
    //To connect to the database we need to instantiate a new PDO object and pass it the
    //connection variables for our database as its parameters
    
    $dbh = new PDO('mysql:host=localhost;dbname=mallfinder', $user, $pass);
    //If the connection is successful we will display a message 
      echo "connection established";

//To get the information about the error you use the method defined for Exception errors
//full list here http://www.php.net/manual/en/class.exception.php in our case we are
//interested in the message so we use the getMessage() method.
} catch (PDOException $e) {
    //if the connection was unsuccessful we will display the error message and the error code
    echo "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>