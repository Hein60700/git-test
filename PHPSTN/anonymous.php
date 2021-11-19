<?php
    declare(strict_types = 1);
    error_reporting(E_ALL);
    ini_set("display_errors",'1');

    $foo = "Foo";

    $test = function($name) use($foo) : string {
        return "hello from $foo anonymous! hi $name";
    };

    $testTwo = fn(String $name) : String
     => "Hello form $foo Anonymosu!hi $name";

    echo $test("aung anug");
    echo "<br>";
    echo $testTwo("KOKO");

    echo "<br>";

    var_dump(gettype($test));
    echo "<br>";
    var_dump(gettype($testTwo));
    // class Test{
    //     public function __invoke(String $name) : String {
    //         return "Hello form Anonymous! hi $name";
    //     }
    // }
    // $test = new Test();
    // echo $test("KOKO");
    // echo "<br>";

    $numbers = [12,18,5,33,22,77,11,22,10];
    $multiply_by_five = array_filter($numbers,fn($n)=>$n%2 == 0);
    var_dump($multiply_by_five);

    

    Route::get('/',function(string $name){ //example at lalavel
        return "hello world $name";
    })
?>