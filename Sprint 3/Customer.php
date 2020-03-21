<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
      
      class Customer {
          
          public $username;
          private $password;
          public $firstname;
          public $lastname;
          public $dateofbirth;
          public $phoneno;
          public $email; 
          
   public function __construct($username,$password,$firstname,$lastname,$email) {
       
       $this->username = $username;
       $this->password = $password;
       $this->firstname = $firstname;
       $this->lastname = $lastname;
       $this->email = $email;
       
   }    
          
    function set_dateofbirth($dateofbirth) {
    $this->dateofbirth = $dateofbirth;
  }
  
   function set_phoneno($phoneno) {
    $this->phoneno = $phoneno;
  }
    

      }
    
  $customer1 = new Customer('mw', 'thisisapassword', 'Maura', 'Watkinson','maurakelly9@hotmail.com');
  $customer1->set_phoneno(0745456554135);
 
  
  var_dump($customer1);
 
       
          
  
     
      
     
        ?>
    </body>
</html>
