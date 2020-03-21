<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
      
      class Treatment {
          
          public $name;
          public $duration;
          public $price;
          public $description;
       
          
   public function __construct($name,$duration,$price) {
       
       $this->name = $name;
       $this->duration = $duration;
       $this->price = $price;
      
       
   }    
          
    function set_description($description) {
    $this->description = $description;
  }
  
    function get_info(){
    return "The $this->name is $this->duration minutes long. This treatment costs £$this->price. $this->description. ";
     
      }
      
      }
    
    
  $Treatment = new Treatment('Deep Tissue Massage', '45', '60');
  $Treatment->set_description('Similar to Swedish massage, deep tissue massage uses slower and firmer strokes and pressure than other treatments - deep finger pressure that concentrates on particular areas, and follows or goes across the fibres of muscles and tendons');
 
  
  echo $Treatment -> get_info();
 
       
      
        ?>
    </body>
</html>


