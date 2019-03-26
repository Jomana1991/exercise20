<?php

namespace classes;


require_once 'traits/traits.php';

use traits\searchy;


Class Book  { 
private $bookName;
private $pubDate;
private $edition;
private $location;
private $stock=0;
private $genre;
private $ISBN;
private $authorFirstName;
private $authorLastName;



    
public function setStock($number){
    
    return $this->stock=$number;
}

public function getStock(){
    return $this->stock;
}

public function borrowedBook(){
    return  $this->stock = $this->stock -1;
}

public function returnedBook(){
    return $this->stock = $this->stock +1;;
}
public Function __construct ($bookName, $pubDate, $edition, $stock, $authorFirstName, $authorLastName, $genre) {
          $this->authorFirstName = $authorFirstName;
          $this->bookName = $bookName;
          $this->authorLastName = $authorLastName;
          $this->pubDate = $pubDate;
          $this->edition = $edition;
          $this->stock = $stock ;
          $this->genre = $genre;
        
}

public function get_Title(){
    return $this->bookName;
     
}
//
//public function set_Title($nameBook){
//    $this->bookName=$nameBook;
//     
//}
//    
//

//
//public function avaliable() {
//  
//    if ($this->stock >0 ) {
//  return "this book is avaliable" .$this->stock = $this->stock -1;
//
//          
//    } else {
//        die ($this->bookName. "is not avaliable, please try another book");
//    }
//}
//
//public function returned() {
//    return ($this->stock = $this->stock +1);
//}


public function search_book (Array $array, $key, $value) {   
    {
    foreach ($array as $subarray){  
        if (isset($subarray[$key]) && $subarray[$key] == $value)
          return $subarray;       
    } 
    
   
}



// below function works
//function set_Properties($array)
//{
//  foreach($array as $property => $value)
//  {
//    $this->{$property} = $value;
//  }
//  return $this;
//} }

}

use searchy;
}
$a = array ( 
    0=> array('bookname' => 'Harry Potter', 'firstName' => 'JK', 'lastName' => 'Rowling'),
    1=> array ('bookname' => 'Vampire Diaries', 'firstName'=> 'John', 'lastName' =>'Smith')
     );

//
//$harryPotter = new Book ('Harry Potter', 'JK', 'Rowling', 'a', 'b', 'c', 'd');
//
//print_r ($harryPotter);
//
//$harryPotter->copies(10);
//echo "\n";
//
//echo "\n";
//echo $harryPotter->get_Title($harryPotter);
//echo "\n";
////echo $book1->searchByName('Harry Potter');
//echo $harryPotter->searchByName($harryPotter);
//echo "\n";
//echo $harryPotter->stock;
//echo $harryPotter->returnBook($harryPotter);
//       



 
//echo $book1->left($book1);

//echo $book1->bookLeft();
//echo "\n";
//echo $book1->stock;

//Function update_book  () {
//}
//Function remove_book () {
//}
//Function remove author
//Function update author info
//Function add author


// useage
//echo $newbook-> multidimensional_array_search('Harry Potter',$books);
    
//Class locations 
//$location
//
//loan class {
//
// }


//$newbook->bookName = 'Harry Potter';
//$newbook->authorFirstName = 'JK';
//$newbook->authorLastName = 'Rowling';
//$newbook->add_book ('Harry Potter', 'JK', 'Rowling', 'a', 'b', 'c', 'd');
//
//$newbook->set_properties(array('bookname'=> 'Harry Potter', 'authorFirstName'=> 
//    'JK', 'authorLastName'=>'Rowling'));
