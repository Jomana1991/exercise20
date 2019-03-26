<?php


spl_autoload_register(function ($className) {
    include $className .'.php';
});



use classes\Book;
use classes\member;
use classes\person;
use classes\admin;


   
$admin1=new admin('Sarah','hello');
$admin1->log_in('SarahAdmin', '6666');
echo "\n";

$harryPotter = new Book ('Harry Potter', 'JK', 'Rowling', 'a', 'b', 'c', 'd');


$admin1->AdminSetStock($harryPotter,1);
echo "\n";

$memberOne = new Member(['firstName' => 'Bob', 'lastName' => 'Marley', 'address' => 'baker street', 'DOB' => '12/03/1988', 'email' => 'test@gmail.com', 'join_date' => 'date']);

$memberOne->log_in('bobby', '123');
echo "\n";

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

$admin1->search($memberOne);

$memberTwo->searchByName($harryPotter);

  $member = array ( 
    0=> array('first_name' => 'John', 'second_name' => 'Smith', 'address'=> '124 avenue', 'DOB'=> '12/4/1994', 'email'=> 'john@hotmail.com','join_date'=> '1/1/2017','status'=>'active'),
    1=> array('first_name' => 'Max', 'second_name' => 'JD', 'address'=> '111 RD', 'DOB'=> '11074/2000', 'email'=> 'max@hotmail.com','join_date'=> '03/01/2000','status'=>'active'));
//to test adding a new member


print_r($admin1->search_member($member,'first_name', 'John'));
// admin log in 
// admin add a book
// create a new book object
// create a member object 
// log in 
// borrow book 
// either member return book or admin return.
