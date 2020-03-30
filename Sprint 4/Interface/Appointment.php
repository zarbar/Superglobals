<?php
namespace Appointment;
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Appointments</title>
    </head>
    <body>
        
        <?php
      
    class Appointment {
          
        private $date; //This is private as it is unique to the customer.
        private $starttime; //This is private as it is unique to the customer.
        private $treatment; //This is private as it is unique to the customer.
       
   public function __construct($date,$starttime,$treatment) {
       $this->date = $date;
       $this->starttime = $starttime;
       $this->treatment = $treatment;
        }    

    public function __destruct() {
       echo "Your appointment for the {$this->treatment} is on {$this->date} at {$this->starttime}.<br>";
      
        }    
   
   }
         
    //function get_info(){
    //return "Your appointment for the $this->treatment is on $this->date at $this->starttime";
     // }
      
      //}
    
    $maura = new Appointment('2020-06-04', '12:00', 'Deep Tissue Massage');
    $tomi = new Appointment('2020-06-05', '13:00', 'Laser');
    $zara = new Appointment('2020-06-06', '14:00', 'Facial');
    $ciara = new Appointment('2020-06-07', '15:00', 'Manicure');
  
    //echo $Appointment -> get_info();
 
        ?>
    </body>
</html>


