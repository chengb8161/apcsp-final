<!DOCTYPE html>
<html>
  <head>
    <title>Function Calculator</title>
  </head>


  <body>

    <h1>Final Project Test v1.5</h1>
    <p>Changes:<br>The calculator works now. <br> Use "+" to add, "-" to subtract, "x" to multiply, "/" to divide and "^" to raise a number to a power.<br> The calculator is now a function calculator.</p>

    <?php
       // define variables and set to empty values
       $arg1 = $arg2 = $arg3 = $output = $retc = "";
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $arg1 = test_input($_POST["arg1"]);
         $arg2 = test_input($_POST["arg2"]);
         $arg3 = test_input($_POST["arg3"]);
         exec("/usr/lib/cgi-bin/sp1a/finaltest " . $arg1 . " " . $arg2 . " " . $arg3, $output, $retc); 
       }
       function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
       }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Number: <input type="text" name="arg1"><br>
      Operation: <input type="text" name="arg2"><br>
      Number: <input type="text" name="arg3"><br>
      <br>
      <input type="submit" value="Calculate!">
    </form>

    <?php
       // only display if return code is numeric - i.e. exec has been called
       if (is_numeric($retc)) {
         echo "<h2>Your Input:</h2>";
         echo $arg1;
         echo "<br>";
         echo $arg2;
         echo "<br>";
         echo $arg3;
         echo "<br>";
       
         echo "<h2>Program Output (an array):</h2>";
         foreach ($output as $line) {
           echo $line;
           echo "<br>";
         }
       
         echo "<h2>Program Return Code:</h2>";
         echo $retc;
       }
    ?>
    
  </body>
</html>
