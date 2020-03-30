<?php
namespace Customer;

//if you have a large project and loads of files to include use autoloader

//include "Appointment.php";

//include "Treatment.php";

//the below code can be used to call an individual class within a namespace 
//use Treatment\Treatment as NewTreatment;
//$object = new NewTreatment;
//echo "<br/>";

include "autoloader.php";
?>

<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer</title>
    </head>
    <body>
        
        <?php
      
    interface UserNameInterFace  {
    public function getUserName();
   
    }
    
    interface LogInterFace{
    public function log($message);
}     
        

      class Customer {
          
          private $username; //This should be private information only viewable by the customer and in line with GDPR. 
          private $password; //This should be private information only viewable by the customer and in line with GDPR.
          protected $firstname; //This is to allow another subclass if created to access this information, for example, therapist can obtain their customer's information.
          protected $lastname; //This is to allow another subclass if created to access this information, for example, therapist can obtain their customer's information.
          protected $dateofbirth; //This is to allow another subclass if created to access this information, for example, therapist can obtain their customer's information.
          protected $phoneno; //This is to allow another subclass if created to access this information, for example, therapist can obtain their customer's information.
          protected $email;  //This is to allow another subclass if created to access this information, for example, therapist can obtain their customer's information.
          
   public function __construct($firstname,$lastname,$dateofbirth,$phoneno,$email) {
       
       $this->firstname = $firstname;
       $this->lastname = $lastname;
       $this->dateofbirth = $dateofbirth;
       $this->phoneno = $phoneno;
       $this->email = $email;
       
   }    
   
   //class User implements UserNameInterFace{
   public function getUsername() {
       return $this->username;
   }
   
   //public function log($message){
        //return $message. "\n";
     // }
   
   public function getPassword() {
       return $this->password;
   }
   
    public function setUsernameAndPassword($username, $password) {
       $this->username = $username;
       $this->password = $password;
       echo "{$this->firstname}'s username is: {$username} and password: {$password}";
       echo "<br>";
    }
   
    public function __destruct() {
       
       //echo "<br>Your Username: {$this->username}.<br>";
       //echo "Your Password: {$this->password}.<br>";
       echo "<br>Your name: {$this->firstname} {$this->lastname}.<br>";
       echo "Your Date of Birth: {$this->dateofbirth}.<br>";
       echo "Your Phone Number: {$this->phoneno}.<br>";
       echo "Your Email: {$this->email}.<br>";
       
    }
       
    //function set_dateofbirth($dateofbirth) {
   // $this->dateofbirth = $dateofbirth;
 // }
  
   //function set_phoneno($phoneno) {
  //  $this->phoneno = $phoneno;
  //}
    

      }
    
  $newcustomer1 = new Customer('Maura', 'Watkinson','1990-04-22','0745456554135','maurakelly9@hotmail.com');
  
  $newcustomer1->setUsernameAndPassword('mw','thisispassword');
          
  $newcustomer2 = new Customer('Afua', 'Danquah','1990-02-22','0797384930943','a.dan@gmail.com');
  $newcustomer2->setUsernameAndPassword('ad','secret');
  //$customer1->set_phoneno(0745456554135);
  
  
  //print_r($customer1);
  //print_r($customer2);
 
       
          
  
     
      
     
        ?>
    </body>
</html>
