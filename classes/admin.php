<?php

namespace classes;

class admin extends person implements searchable, deletable, updateable {

    //this function allows you to search for a member 
    function search();

    // this function allows you to delete a member
    function delete();
    //this function allows you to update a member 
    function update ();
    
    function log_in ($username1, $password1) {
   $this->username= $username1;
    $this->password=$password1;
    
    }
}

// member can:
// search for a book
// borrow a book
// return a book 
