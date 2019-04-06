<? php  
    abstract class ProfileTemplate
    {
        abstract public function getUser();
        abstract public function fetchUser();
        abstract public function setEmail();
        abstract public function getEmail();
        abstract public function setDescript();
        abstract public function getDescript();
        abstract public function getType();
        abstract public function setType();
    }
?>