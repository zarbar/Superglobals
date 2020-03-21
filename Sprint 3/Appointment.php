<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
      
    class Appointment {
          
        public $date;
        public $starttime;
        public $treatment;
       
   public function __construct($date,$starttime,$treatment) {
       $this->date = $date;
       $this->starttime = $starttime;
       $this->treatment = $treatment;
   }    
         
    function get_info(){
    return "Your appointment for the $this->treatment is on $this->date at $this->starttime";
      }
      
      }
    
    $Appointment = new Appointment('2020-06-04', '12:00', 'Deep Tissue Massage');
  
    echo $Appointment -> get_info();
 
        ?>
    </body>
</html>


