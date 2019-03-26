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

    public function search_member(Array $array, $key, $value) { {
            foreach ($array as $subarray) {
                if (isset($subarray[$key]) && $subarray[$key] == $value)
                    return $subarray;
            }
        }
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


use searchy;
}

//to test adding a new member
//$memberOne = new Member(['first_name' => 'Bob', 'last_name' => 'Marley', 'address' => 'baker street', 'DOB' => '12/03/1988', 'email' => 'test@gmail.com', 'join_date' => 'date']);
////$newMember>add_person (['first_name' => 'Bob', 'last_name' => 'Marley', 'address' => 'baker street', 'DOB' => '12/03/1988', 'email' => 'test@gmail.com', 'join_date' => 'date' ]);
////print_r($newMember);
////print_r($newMember->borrow('Harry Potter', 'Bob'));
////echo ($memberOne->avaliable($book1));
//echo "\n";
//$memberOne->log_in('bobby', '123');
////$memberOne->searchByName('Harry Potter');
//
////echo $book1->bookLeft();
////echo "\n";
////echo $book1->bookLeft();
//
//$memberTwo= new Member (['first_name' => 'John', 'second_name' => 'Smith', 'address'=> '124 avenue', 'DOB'=> '12/4/1994', 'email'=> 'john@hotmail.com','join_date'=> '1/1/2017','status'=>'active']);
////echo ($memberTwo->avaliable($book2));
//$memberOne->log_in('johnny', '222');
//echo "\n";
////echo $memberTwo->requestBook($harryPotter);
//echo "\n";
//echo $memberTwo->searchByName($harryPotter);
//echo "\n";
//echo $memberTwo->requestBook($harryPotter);
//echo "\n";
//echo $memberTwo->returnBook($harryPotter);


//echo ($memberTwo->avaliable($book2));
//echo ($memberTwo->avaliable($book1));
//echo ($memberTwo->avaliable($book1));
////echo ($memberTwo->returnedStock($book1));
////echo "\n";
//echo ($memberOne->avaliable($book1));

//$member = array ( 
//    0=> array('first_name' => 'John', 'second_name' => 'Smith', 'address'=> '124 avenue', 'DOB'=> '12/4/1994', 'email'=> 'john@hotmail.com','join_date'=> '1/1/2017','status'=>'active'),
//    1=> array('first_name' => 'Max', 'second_name' => 'JD', 'address'=> '111 RD', 'DOB'=> '11074/2000', 'email'=> 'max@hotmail.com','join_date'=> '03/01/2000','status'=>'active')
//
//     );
//$searchMember = new member ();
//print_r($searchMember->search_member($member,'second_name', 'Smith'));
//
//print_r ($searchMember);
//
////test setting and getting a new member
//$member1 = new member;
//$member1-> set_member ('Ghena', 'shaban' , '312 rd', '12/1/1993' , 'ghena@hotmail.co.uk', '12/1/2019' , 'active');
//echo $member1-> get_member();