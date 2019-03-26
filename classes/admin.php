<?php

namespace classes;

require_once 'interface/interface.php';
//use interfaces\stockable;
//use interfaces\deletable;
//use interfaces\updateable;
//use interfaces\searchable;

//class admin extends person implements searchable, deletable, updateable {
class admin extends person {
 

    function log_in ($username1, $password1) {
   $this->username= $username1;
    $this->password=$password1;
    echo " Your an admin and have logged in as ". $username1;
    }
    
    public function AdminSetStock($bookObject, int $number){
     $bookName=$bookObject->get_Title();
     $copies=$bookObject->setStock($number);
     
     echo $this-> username." added $copies copies of ".$bookName;
}

    //this function allows you to search for a member 
//    function search(member $firstname, member $lastname);
    // shows you what ?
    

    // this function allows you to delete a member
//    function delete();
    
    
    //this function allows you to update a member 
//    function update ();
    
    
    
    
}

// member can:
// search for a book
// borrow a book
// return a book 
