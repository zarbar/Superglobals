<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Treatments</title>
    </head>
    <body>
        
        <?php
      
      class Treatment {
          
          public $name; //Remain as public information for all potential and current customers to select the appropriate treatment. 
          public $duration;
          public $price;
          public $description;
       
          
   public function __construct($name,$duration,$price) {
       
       $this->name = $name;
       $this->duration = $duration;
       $this->price = $price;
      
      
   }   
   
   public function __destruct() {
       echo "The {$this->name} is {$this->duration} minutes long. <br/>This {$this->name} costs £{$this->price}.<br>"; 
   }  
          
   
   //public function getDescription(){
     //  return $this->description;
 //  }
   
    
   public function setDescription($description){
       
      $this->description = $description;
      echo "Description of $description: ";
       switch ($description) {
           case "Deep Tissue Massage":
           echo "Similar to Swedish massage, deep tissue massage uses slower and firmer strokes and pressure than other treatments - deep finger pressure that concentrates on particular areas, and follows or goes across the fibres of muscles and tendons<br/>";
               break;
           case "Laser":
           echo "Hair Removal - Face<br/>";
               break;
           case "Facial":
           echo "Hydrafacial<br/>";
               break;
           case "Manicure":
           echo "Cleaning, shaping and painting of fingernails<br/>";
               break;
        }
   
   }
   
   //function set_description($description) {
   // $this->description = $description;
  //}
  
   // function get_info(){
    //return "The $this->name is $this->duration minutes long. This treatment costs £$this->price. $this->description. ";
     
     // }
      
      }
    
    
  $deeptissue = new Treatment('Deep Tissue Massage', '45', '60');
  $deeptissue->setDescription('Deep Tissue Massage');
  
   $laser = new Treatment('Laser', '60', '50');
   $laser->setDescription('Laser');
   
   $facial = new Treatment('Facial', '60', '40');
   $facial->setDescription('Facial');
   
   $manicure = new Treatment('Manicure', '30', '25');
   $manicure->setDescription('Manicure');
  
   //var_dump($deeptissue);

    //$Treatment->set_description('Similar to Swedish massage, deep tissue massage uses slower and firmer strokes and pressure than other treatments - deep finger pressure that concentrates on particular areas, and follows or goes across the fibres of muscles and tendons');
    // echo $Treatment -> get_info();
        
 
       
      
        ?>
    </body>
</html>


