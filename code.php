<?php


spl_autoload_register(function ($className) {
    require_once $className .'.php';
});

//use interfaces\borrowable;?

use classes\admin;
use classes\Book;
use classes\member;
use classes\person;

   
$admin1=new admin('Sarah','hello');
$admin1->log_in('SarahAdmin', '6666');
echo "\n";

$harryPotter = new Book ('Harry Potter', 'JK', 'Rowling', 'a', 'b', 'c', 'd');


$admin1->AdminSetStock($harryPotter,1);
echo "\n";

$memberOne = new Member(['firstName' => 'Bob', 'lastName' => 'Marley', 'address' => 'baker street', 'DOB' => '12/03/1988', 'email' => 'test@gmail.com', 'join_date' => 'date']);

$memberOne->log_in('bobby', '123');
echo "\n";

 $memberOne->searchByName($harryPotter);
echo "\n";

echo $memberOne->requestBook($harryPotter);
echo "\n";
//echo $memberOne->returnBook($harryPotter);
echo "\n";

$memberTwo= new Member (['firstName' => 'John', 'lastName' => 'Smith', 'address'=> '124 avenue', 'DOB'=> '12/4/1994', 'email'=> 'john@hotmail.com','join_date'=> '1/1/2017','status'=>'active']);
$memberTwo->log_in('John12', 'secret');
echo "\n";
$memberTwo->searchByName($harryPotter);


//print_r($newMember->borrow('Harry Potter', 'Bob'));
//echo ($memberOne->avaliable($book1));

//$memberOne->searchByName('Harry Potter');

//echo $book1->bookLeft();
//echo "\n";
//echo $book1->bookLeft();

//$memberTwo= new Member (['firstName' => 'John', 'lastName' => 'Smith', 'address'=> '124 avenue', 'DOB'=> '12/4/1994', 'email'=> 'john@hotmail.com','join_date'=> '1/1/2017','status'=>'active']);
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
//echo $memberOne->returnBook($harryPotter);
//
////echo $memberTwo->searchByName($harryPotter);
////echo "\n";
////echo $memberTwo->requestBook($harryPotter);
//echo "\n";
//echo $memberTwo->get_member();


// admin log in 
// admin add a book
// create a new book object
// create a member object 
// log in 
// borrow book 
// either member return book or admin return.
