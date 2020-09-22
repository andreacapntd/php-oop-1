<?php

 class User {

   public $name;
   public $lastName;
   public $dateOfBirth;
   public $userName;
   public $site;

   public function __construct($name, $lastName, $dateOfBirth, $userName, $site) {

     $this -> name = $name;
     $this -> lastName = $lastName;
     $this -> dateOfBirth = $dateOfBirth;
     $this -> userName = $userName;
     $this -> site = $site;

   }

   public function __toString() {

     return "User" . "<br>" . "Name: " . $this -> name . "<br>"
          . "Last name: " . $this -> lastName . "<br>"
          . "Date of birth: " . $this -> dateOfBirth . "<br>"
          . "Username: " . $this -> userName . "<br>"
          . "Site: " . $this -> site . "<br>";

   }

 }


 $user1 = new User("Andrea", "Caprara", "1985/10/21", "andreacap" , "Facebook");
 $user2 = new User("Pasquale", "Zagaria", "1945/08/10", "disgrazieto_maledetto", "Instagram");
 $user3 = new User("Jonny", "Dorelli", "1940/05/12", "jonnydor", "Twitter");

 echo $user1 . "<br>" . $user2 . "<br>" . $user3;
