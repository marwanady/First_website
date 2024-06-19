<?php
class Users {
   
   public function __construct
   ( 
    public $name,
   public $email,
   public $contact_info
) {

    $this->name = $name;
    $this->email = $email;
    $this->contact_info = $contact_info;
   }
   public function get_data() {
    echo $this->name . "<br>";
    echo $this->email . "<br>";
    echo $this->contact_info . "<br>";

   }

}

$user1 = new Users('Ahmed', 'ahmed@test.com','123');
$user2 = new Users('    marwa', 'mar@test.com','523');

//$user1 = new Users;
//$user1->set_data('Ahmed', 'ahmed@test.com','123');
//$user1->get_data();
//$user2->get_data();

class Employees extends Users
{
   public function __construct
   ( 
    public $name,
   public $email,
   public $contact_info,
   public $salary
) {

    parent::__construct($name, $email, $contact_info) ;
    $this->salary = $salary;

    
     }
     public function get_data ()
     {
      parent:: get_data();
      echo $this->salary;
     }
}
$emp1 = new Employees('menna','mnj2DG.com','12521',1254);
$emp1->get_data();

?>