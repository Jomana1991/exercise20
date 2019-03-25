<?php
//only search interface and the book(all books) 
// search 
// boroow and request interface (member and admin)
// trait search 
// the book: interface borrowable/searchable (list all book)/requestable/ returnable
// the member: same but not returnable 
// the admin: retrunable / search (list all book)/ 

namespace traits;

trait searchy {
    public function searchByName($bookObject){
      $titleName=$bookObject->get_Title();
        if ($bookObject->inStock() >0 ) {
  return "There are ". $bookObject->inStock() . " copies of $titleName";

          
    } else {
        die ($bookObject->get_Title(). "is not avaliable, please try another book");
    }
       
    }
    
        public function requestBook($bookObject){
      $titleName=$bookObject->get_Title();
        if ($bookObject->inStock() >0 ) {
         $updatedStock= $bookObject->borrowedBook();
            echo "We would like to confim that $titleName book has been requested and there are $updatedStock copies left.";

          
    } else {
        die ($bookObject->get_Title(). "is not avaliable, please try another book");
    }
//       
    }
    
  public function returnBook($bookObject) {
       $titleName=$bookObject->get_Title();
       $firstName=$this->first_name;
       $updatedStock=$bookObject->returnedBook();
      
   echo "\n $firstName has returned a book so there are $updatedStock $titleName copies left";    
 }
 
 // the above has details that the member shouldnt see.. only trying it out
}
