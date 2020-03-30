<!DOCTYPE html>
<html>
<body>

<?php
// Parent class
abstract class Treatment {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro() : string; 
}

// Child classes
class Massage extends Treatment {
  public function intro() : string {
    return "Need to relax! Choose a $this->name!"; 
  }
}

class Face extends Treatment {
  public function intro() : string {
    return "Is your skin feeling a bit dull? Choose a  $this->name treatment!"; 
  }
}

class Body extends Treatment {
  public function intro() : string {
    return "Fancy smooth silky skin? Choose a $this->name treatment!"; 
  }
}
 class Nails extends Treatment {
     public function intro() : string {
         return "Treat yourself. Choose a $this->name treatment!";
     }
}

// Create objects from the child classes
$massage = new massage("Deep Tissue Massage");
echo $massage->intro();
echo "<br>";

$face = new face("Facial");
echo $face->intro();
echo "<br>";

$body = new body("Laser Hair Removal");
echo $body->intro();
echo "<br>";

$nails = new nails ("Manicure");
echo $nails->intro();
?>
 
</body>
</html>
