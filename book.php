<?php


Class Book  { 
private $bookName;
private $pubDate;
private $edition;
private $location;
private $stock;
private $genre;
private $ISBN;
private $authorFirstName;
private $authorLastName;


public Function __construct ($bookName, $pubDate, $edition, $stock, $authorFirstName, $authorLastName, $genre) {
          $this->authorFirstName = $authorFirstName;
          $this->bookName = $bookName;
          $this->authorLastName = $authorLastName;
          $this->pubDate = $pubDate;
          $this->edition = $edition;
          $this->stock = $stock ;
          $this->genre = $genre;
        
}

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
}
$a = array ( 
    0=> array('bookname' => 'Harry Potter', 'firstName' => 'JK', 'lastName' => 'Rowling'),
    1=> array ('bookname' => 'Vampire Diaries', 'firstName'=> 'John', 'lastName' =>'Smith')
     );

$newbook = new Book ();
print_r($newbook->search_book($a,'bookname', 'Vampire Diaries'));
//$newbook->add_book ('Harry Potter', 'JK', 'Rowling', 'a', 'b', 'c', 'd');
print_r ($newbook);

//Function update_book  () {}
//Function remove_book () {}
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

//$newbook->set_properties(array('bookname'=> 'Harry Potter', 'authorFirstName'=> 
//    'JK', 'authorLastName'=>'Rowling'));
//



