<?php

abstract class person {

    protected $username;
    protected $password;
    
      abstract function log_in($username1, $password1);

}

class member extends person {

    protected $address;
    protected $DOB;
    protected $email;
    protected $join_date;

  function log_in ($username1, $password1) {
    $username1 = $this->username;
    $password1 = $this->password;
    
    }
    
    
}

class admin extends person implements searchable, deletable, updateable {

    //this function allows you to search for a member 
    function search();

    // this function allows you to delete a member
    function delete();
    //this function allows you to update a member 
    function update ();
    
    function log_in ($username1, $password1) {
    $username1 = $this->username;
    $password1 = $this->password;
    
    }
}