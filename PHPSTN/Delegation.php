<?php
declare(strict_types = 1);
error_reporting(E_ALL);
ini_set("display_errors",'1');
    interface CEOInterface{
        public function scold();
    }
    interface GMInterface{
        public function giveMoney();
    }
    interface ManagerInterface{
        public function manage();
    }
    class CEO implements CEOInterface{
         public function scold()
         {
             echo "CEO is scolding";
         }
    }
    class GM implements GMInterface {
        public function giveMoney()
        {
            echo "GM is giving money";
        }
    }
    class Manager implements ManagerInterface{
        public $ceo;
        public $gm;
        public function __construct(CEOInterface $ceo, GMInterface $gm) {
            $this->ceo = $ceo;
            $this->gm = $gm;
        }
        public function manage()
        {
            echo "manager is managing";
        }
    }
    // $ceo = new CEO();
    // $ceo -> scold();
    // echo "<br>";
    // $gm = new GM();
    // $gm -> giveMoney();
    // echo "<br>";
    $manager = new Manager(new CEO(),new GM());
    $manager -> manage();
    echo "<br>";
    $manager->ceo -> scold();
    echo "<br>";
    $manager->gm -> giveMoney();

    echo "<br>";

    // $manager -> scold();

    // echo "<br>";

    // $manager -> giveMoney();
?>