<?php

// borrow and request interface (member and admin)
// trait search 
// the book: interface borrowable requestable/ returnable
// the member: same but not returnable 
// the admin: retrunable / search (list all book)/ 

namespace traits;

trait searchy {
    public function searchByName($bookObject){
      $titleName=$bookObject->get_Title();
        if ($bookObject->getStock() >0 ) {
  echo $titleName ." is avaliable and we have ". $bookObject->getStock() . " copies left";

          
    } else {
        die ($bookObject->get_Title(). "is not avaliable, please try another book");
    }
       
    }
    
        public function requestBook($bookObject){
      $titleName=$bookObject->get_Title();
        if ($bookObject->getStock() >0 ) {
         $updatedStock= $bookObject->borrowedBook();
            echo "We would like to confim that $titleName book has been requested and you can pick it up from your local Library. There are $updatedStock copies left.";
     
    } else {
        die ($bookObject->get_Title(). "is not avaliable, please try another book");
    }
//       
    }
    
  public function returnBook($bookObject) {
       $titleName=$bookObject->get_Title();
       $firstName=$this->firstName;
       $updatedStock=$bookObject->returnedBook();
      
   echo "\n $firstName has returned the $titleName book so there are $updatedStock copies left";    
 }
 
 // the above has details that the member shouldnt see.. only trying it out
}
