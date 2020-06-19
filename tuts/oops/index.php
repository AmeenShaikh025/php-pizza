<!-- 4. Constructor -->
<?php

    class User {

        public $username;
        private $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->email added a new friend";
        }
    }

    $userOne = new User('mario','mario@asm.com');
    $userTwo = new User('luigi','luigi@asm.com');


    //echo $userOne->email = 3;//erro if private

    // echo $userOne->username . '<br>';
    // echo $userOne->email. '<br>';
    
    // echo $userTwo->username . '<br>';
    // echo $userTwo->email. '<br>';

    //echo $userOne->addFriend();

?>

<!-- 5. getters and setters -->


<?php

    class User1 {

        public $username;
        private $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->email added a new friend";
        }

        //getters, //gts a private property
        public function getEmail() {
            return $this->email;
        }


        //setters
        public function setEmail($email) {
            if(strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }

    }

    $userOne = new User1('mario','mario@asm.com');
    $userTwo = new User1('luigi','luigi@asm.com');


    //echo $userOne->email = 3;//erro if private

    // echo $userOne->username . '<br>';
    // echo $userOne->email. '<br>'; //cannot access it as it is private
    //use getters and setters
    
    //echo $userTwo->username . '<br>';
    // echo $userTwo->email. '<br>';

    $userOne->setEmail('yoshi@asm.com');


    echo $userOne->getEmail() . '<br />';
    echo $userTwo->getEmail() . '<br />';
    echo "<br />";
    echo "<br />";

?>

<!-- 6 INHERITANCE -->


<?php

    class User2 {

        public $username;
        private $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->email added a new friend";
        }

        //getters, //gts a private property
        public function getEmail() {
            return $this->email;
        }


        //setters
        public function setEmail($email) {
            if(strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }

    }

    class AdminUser extends User2 {
        public $level;
        public function __construct($username, $email,$level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }
    }

    $userOne = new User2('mario','mario@asm.com');
    $userTwo = new User2('luigi','luigi@asm.com');
    $userThree = new AdminUser('yoshi', 'yoshi@asm.com', 5);

    //echo $userOne->email = 3;//erro if private

    // echo $userOne->username . '<br>';
    // echo $userOne->email. '<br>'; //cannot access it as it is private
    //use getters and setters
    
    //echo $userTwo->username . '<br>';
    // echo $userTwo->email. '<br>';

    $userOne->setEmail('yoshi@asm.com');


    echo $userOne->getEmail() . '<br />';
    echo $userTwo->getEmail() . '<br />';

    echo $userThree->username.'<br>';
    echo $userThree->getEmail().'<br>';
    echo $userThree->level.'<br>';

    echo "<br />";
    echo "<br />";

?>

<!-- Overriding Properties and Methods -->

<?php

    class User3 {

        public $username;
        private $email;
        public $role = "member";

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->email added a new friend";
        }

        public function message() {
            return "$this->email sent a new message";
        }

        //getters, //gts a private property
        public function getEmail() {
            return $this->email;
        }


        //setters
        public function setEmail($email) {
            if(strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }

    }

    class AdminUser1 extends User3 {
        public $level;
        public $role = "admin";

        public function __construct($username, $email,$level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }
        public function message() {
            return "$this->email, an admin, sent a new message";
        }

    }

    $userOne = new User3('mario','mario@asm.com');
    $userTwo = new User3('luigi','luigi@asm.com');
    $userThree = new AdminUser1('yoshi', 'yoshi@asm.com', 5);

    //echo $userOne->email = 3;//erro if private

    // echo $userOne->username . '<br>';
    // echo $userOne->email. '<br>'; //cannot access it as it is private
    //use getters and setters
    
    //echo $userTwo->username . '<br>';
    // echo $userTwo->email. '<br>';

    $userOne->setEmail('yoshi@asm.com');


    echo $userOne->getEmail() . '<br />';
    echo $userTwo->getEmail() . '<br />';

    echo $userThree->username.'<br>';
    echo $userThree->getEmail().'<br>';
    echo $userThree->level.'<br>';

    echo $userOne->role . '<br />';
    echo $userThree->role.'<br>';

    echo $userOne->message() . '<br/>';
    echo $userTwo->message() . '<br/>';
    echo $userThree->message() . '<br/>';

    echo "<br />";
    echo "<br />";

?>


<!-- Protected Modifier -->
<?php

    class User4 {

        public $username;
        protected $email;
        public $role = "member";

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->email added a new friend";
        }

        public function message() {
            return "$this->email sent a new message";
        }

        //getters, //gts a private property
        public function getEmail() {
            return $this->email;
        }


        //setters
        public function setEmail($email) {
            if(strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }

    }

    class AdminUser2 extends User4 {
        public $level;
        public $role = "admin";

        public function __construct($username, $email,$level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }
        public function message() {
            return "$this->email, an admin, sent a new message";
        }

    }

    $userOne = new User4('mario','mario@asm.com');
    $userTwo = new User4('luigi','luigi@asm.com');
    $userThree = new AdminUser2('yoshi', 'yoshi@asm.com', 5);

    //echo $userOne->email = 3;//erro if private

    // echo $userOne->username . '<br>';
    // echo $userOne->email. '<br>'; //cannot access it as it is private
    //use getters and setters
    
    //echo $userTwo->username . '<br>';
    // echo $userTwo->email. '<br>';

    $userOne->setEmail('yoshi@asm.com');


    echo $userOne->getEmail() . '<br />';
    echo $userTwo->getEmail() . '<br />';

    echo $userThree->username.'<br>';
    echo $userThree->getEmail().'<br>';
    echo $userThree->level.'<br>';

    echo $userOne->role . '<br />';
    echo $userThree->role.'<br>';

    echo $userOne->message() . '<br/>';
    echo $userTwo->message() . '<br/>';
    echo $userThree->message() . '<br/>';



    echo "<br />";
    echo "<br />";
?>


<!-- Class Destruct, Clone method -->

<?php

    class User5 {

        public $username;
        protected $email;
        public $role = "member";

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function __destruct() {
           echo "the user $this->username was removed <br/>"; 
        }

        public function __clone() {
            $this->username = $this->username .'cloned <br />';
        }

        public function addFriend() {
            return "$this->email added a new friend";
        }

        public function message() {
            return "$this->email sent a new message";
        }

        //getters, //gts a private property
        public function getEmail() {
            return $this->email;
        }


        //setters
        public function setEmail($email) {
            if(strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }

    }

    class AdminUser3 extends User5 {
        public $level;
        public $role = "admin";

        public function __construct($username, $email,$level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }
        public function message() {
            return "$this->email, an admin, sent a new message";
        }

    }

    $userOne = new User5('mario','mario@asm.com');
    $userTwo = new User5('luigi','luigi@asm.com');
    $userThree = new AdminUser3('yoshi', 'yoshi@asm.com', 5);

    //echo $userOne->email = 3;//erro if private

    // echo $userOne->username . '<br>';
    // echo $userOne->email. '<br>'; //cannot access it as it is private
    //use getters and setters
    
    //echo $userTwo->username . '<br>';
    // echo $userTwo->email. '<br>';

    $userOne->setEmail('yoshi@asm.com');


    echo $userOne->getEmail() . '<br />';
    echo $userTwo->getEmail() . '<br />';

    echo $userThree->username.'<br>';
    echo $userThree->getEmail().'<br>';
    echo $userThree->level.'<br>';

    echo $userOne->role . '<br />';
    echo $userThree->role.'<br>';

    echo $userOne->message() . '<br/>';
    echo $userTwo->message() . '<br/>';
    echo $userThree->message() . '<br/>';


    //unset($userOne); // -> To Destruct
    $userCloned = clone $userOne;
    echo $userCloned->username . '<br />';

    echo "<br />";
    echo "<br />";
?>

<!-- Static Properties -->

<?php

    class Weather {
        public static $tempConditions = ['cold', 'mild', 'warm'];

        public static function celsiusToFarenhite($c){
            return $c * 9 / 5 + 32 . '<br />';
        }

        public static function determineTempCondition($f){
            if($f < 40) {
                return self::$tempConditions[0] . '<br />';
            } else if($f < 70) {
                return self::$tempConditions[1] . '<br />';
            } else {
                return self::$tempConditions[2] . '<br />'; 
            }
        }
    }

    //print_r(Weather::$tempConditions);
    echo Weather::celsiusToFarenhite(20);

    echo Weather::determineTempCondition(80);
    echo Weather::determineTempCondition(20);
    echo Weather::determineTempCondition(50);

    echo '<br />';
    echo '<br />';

?>