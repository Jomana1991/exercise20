<?php

namespace classes;

//require_once 'person.php';
//require_once 'book.php';
//require '../interface/interface.php';
require_once 'traits\traits.php';

spl_autoload_register(function ($className) {
    require_once'../'.  $className .'.php';
});


use classes\person;
use classes\Book;
use traits\searchy;
//use interfaces\searchable;

class Member extends person{
    protected $firstName;
    protected $lastName;
    protected $address;
    protected $DOB;
    protected $email;
    protected $join_date;
    protected $status;

    
     function log_in ($username1, $password1) {
    $this->username= $username1;
     $this->password =$password1;
    
     echo " You have logged in as $username1 What would you like to do next? Search/ Request / Return";
    }
    
    
    public function __construct($args = []) {
       
$this->firstName = $args['firstName'] ?? NULL;
$this->lastName = $args['lastName'] ?? NULL;
        $this->address = $args['address'] ?? NULL;
        $this->DOB = $args['DOB'] ?? NULL;
        $this->email = $args['email'] ?? NULL;
        $this->join_date = $args['join_date'] ?? NULL;
        
        echo"Thank you for registering in our Library ". $this->firstName ." Please log in" . "\n";
    }
    
    public function getfirstName(){
        echo $this->firstName;
    }

//    public function set_member($firstName, $secondName, $Address, $dateOfBirth, $Email, $joinDate, $memberStatus) {
//        parent::set_person($firstName, $secondName);
//        $this->address = $Address;
//        $this->DOB = $dateOfBirth;
//        $this->email = $Email;
//        $this->join_date = $joinDate;
//        $this->status = $memberStatus;
//    }

    public function get_member() {
        return
                $this->firstName . " " .
                $this->lastName . " " .
                $this->address . " " .
                $this->DOB . " " .
                $this->email . " " .
                $this->join_date . " " .
                $this->status . " " . "\n";
    }

   

    public function update_member() {
        //what do we need to update?        
    }

    public function borrow(Book $title,member $name) {
        $this->title = $title;
        $this->first_name = $name;

        return $name . " has requested a book called " . $title;
    }

//   public function avaliable($book) {
//       $booksAva = $book->avaliable();
//       $bookName= $book->bookName;
//       echo "\n Someone has borrowed a book so  there are ".  $booksAva . " of ". $bookName . " left";    
// }
    
//       public function avaliable($bookName) {
//       
//       $title=$book->get_Title();
//       $booksAva = $book->avaliable($book);
//       return "\n Someone has borrowed a book so  there are ".  $booksAva .  " of left";
//       
//      
//                   
// }
  
 
    public function returnedStock ($book) {
       $booksAva = $book->returned();
       $bookName= $book->get_Title();
       echo "\n Someone has returned a book so  there are ".  $booksAva . " of ". $bookName . "left";    
 }

//   public function searchBook(Array $array, $key, $value) { {
//            foreach ($array as $subarray) {
//                if (isset($subarray[$key]) && $subarray[$key] == $value)
//                    return $subarray;
//            }
//        }
//    }

use searchy;
}
