<?php

namespace classes;

//this class can be an abstract (first and last name should be required)

 abstract Class person  {
     
        protected $username;
        protected $password;
    
   
      abstract function log_in($username1, $password1);
      
      public function get_userName(){
          return $this->username;
      }

 } 

//    public function __construct($args = []) {
//        $this->first_name = $args['first_name'] ?? NULL;
//        $this->last_name = $args['last_name'] ?? NULL;
//    }
//
//    public function search_person(Array $array, $key, $value) { {
//            foreach ($array as $subarray) {
//                if (isset($subarray[$key]) && $subarray[$key] == $value)
//                    return $subarray;
//            }
//        }
//    }
//
//    public function set_firstName($firstName) {
//        $this->first_name = $firstName;
//        }
//
//    public function get_firstName() {
//       echo $this->first_name . " ";
//    }
//    public function set_lastName($secondName) {
//    $this->second_name=$secondName;
//}
//
//   public function get_lastName(){
//    echo $this->second_name . " ". "\n";
//}
//
//public function personInfo() {
//  $this->get_firstName();
//  $this->get_lastName();  








// to test set and get new person
//$person1= new person;
//
//$person1->set_firstName('Lucy');
//$person1->set_lastName('Martin');
//$person1->personInfo();
//
//
//$person = array ( 
//    0=> array('first_name' => 'John', 'second_name' => 'Smith'),
//    1=> array ('first_name' => 'Lucy', 'second_name' => 'Martin'),
//    2=> array ('first_name' => 'Max', 'second_name' => 'JD')
//     );
//
////to test the search person function
//$newPerson = new person ();
//print_r($newPerson->search_person($person,'first_name', 'John'));
//
//print_r ($newPerson);


