<?php
// "this" takes all of the object / construct recievs data about the object and builds it in memory
class User {
    private $username;
    private $userFirstname;

    public function __construct($username, $userFirstname ){
        $this->username = $username;
        $this->userFirstname = $userFirstname;
    }

    // Getters 
    public function getUsername(){
        return $this->username;
    }

    public function getFirstname() {
        return $this->userFirstname;
        
    }

    // Setters 
    public function setUsername($username){
        $this->username = $username;
    }

    //get it in the db
    public function connectToDatabase(){
        require_once __DIR__."/db.php";
        $sql = "INSERT INTO people VALUES (:person_pk, :person_username, :person_first_name)";
        $stmt = $_db->prepare($sql);
        $stmt->bindValue(":person_pk", null);
        $stmt->bindValue(":person_username", $this->username);
        $stmt->bindValue(":person_first_name", $this->userFirstname);
        $stmt->execute();
        return true;
    }

}

//instantiate object = convert code into object in memory 
$formUsername = $_POST['user_name'] ?? '';
$formUserFirstname = $_POST['user_first_name'] ?? '';


//$user = new User($formUsername, $formUserFirstname);
//echo $user->getUsername();
//$user->setUsername("Sofia123");
//echo $user->getFirstname();
//$user->connectToDatabase();


$user = new User($formUsername, $formUserFirstname);
echo $user->getUsername();
$user->connectToDatabase();



