<?php
trait subscriber{
    function subscriberLogin(){
        echo " subscriber log in<br>";
    }
}
trait contributer{
    function contributerLogin(){
        echo " contributer log in<br>";
    }
}
trait author{
    function authorLogin(){
        echo " author log in<br>";
    }
}
trait admin{
    function adminLogin(){
        echo " admin log in<br>";
    }
}
class member{
    use subscriber , contributer , author , admin;
    public function run(){
        $this->subscriberLogin();
        $this->contributerLogin();
        $this->authorLogin();
        $this->adminLogin();

        echo "all lpged in";
    }
}
$user = new member();
$user->run();