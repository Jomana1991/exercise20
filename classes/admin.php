<?php

namespace classes;

require_once 'interface/interface.php';
require_once 'traits/traits.php';
//use interfaces\stockable;
//use interfaces\deletable;
//use interfaces\updateable;
use traits\searchy;
use interfaces\searchable;

spl_autoload_register(function ($className) {
    require_once'../'.  $className .'.php';
});


use classes\person;
use classes\member;


//class admin extends person implements searchable, deletable, updateable {
class admin extends person implements searchable {
 

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

//    this function allows you to search for a member 
    function search($object){
       
        $memberInfo=$object->get_member();
       echo $memberInfo; 
        
    }
    
       public function search_member(Array $array, $key, $value) { {
            foreach ($array as $subarray) {
                if (isset($subarray[$key]) && $subarray[$key] == $value)
                    return $subarray;
            }
        }
    }
    
     public function searchBook(Array $array) { {
            print_r($array);
            }
        }
        use searchy; 
    }
    
    
 
    
 
    // this function allows you to delete a member
//    function delete();
    
    
    //this function allows you to update a member 
//    function update ();
    
    
    
   


// member can:
// search for a book
// borrow a book
// return a book 

