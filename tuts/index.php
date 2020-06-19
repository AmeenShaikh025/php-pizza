<?php

    //constats
    define('NAME', 'Yoshi');

    //echo "hello";
    //$name = "Yoshi";
    $age = 30;

    #$name = "Mario";

    //error
    //define("NAME", "Mario")
?>

<!-- Strings -->
<?php

    $stringOne = 'my email is ';
    $stringTwo = 'mario123@thenetninja.co.uk';

    echo $stringOne;
    //concat
    //echo $stringOne . $stringTwo;
    echo "<br />";
    $name = "mario";

    //echo 'Hey, my name is ' . $name;

    //echo "Hey my name is $name";
    //error for single quotes
    //echo 'Hey my name is $name'

    //echo "The ninja screamed \"wahhh\"";

    //echo 'the ninja screamed "ehaa"';
    echo "<br />";
    //echo $name[0]; //m
    //echo $name[1];

    //echo strlen($name);
    echo "<br />";

    //echo strtoupper($name);
    echo "<br />";

    //echo strtolower($name);
    echo "<br />";

    //echo str_replace('m','n',$name);

?>


<!-- Numbers -->

<?php

    $radius = 25;
    $pi = 3.14;

    // *, /, +, -, **

    echo $pi * $radius**2;

    echo '<br />';
    
    // B I D M A S

    echo 2 * (4+9) / 3;

    //increment and decrement operators
    
    // echo '<br />';
    // echo $radius++;
    // echo '<br />';
    // echo $radius;
    // echo '<br />';
    // echo $radius--;
    // echo '<br />';
    // echo $radius;


    // shorthand operators

    $age = 20;
    // //$age = $age + 10;
    // $age += 10;
    // echo '<br />';
    
    // echo $age;
    // $age -= 10;
    // echo '<br />';

    // echo $age;
    // $age *= 10;
    // echo '<br />';
    // echo $age;

    // number functions
    
    // echo '<br />';
    // echo floor($pi);
    
    // echo '<br />';
    // echo ceil($pi);
    
    // echo '<br />';
    // echo " pi is ".pi();


?>


<!-- Arrays -->

<?php

//indexed arrays

$peopleOne = ["Shaun","Crystal","Ryu"];
echo '<br />';
echo $peopleOne[1];

$peopleTwo = array('ken', 'chun-lee');
echo '<br />';
echo $peopleTwo[1];


$ages = [20, 30, 40, 50];
echo '<br />';
print_r($ages);

//update value
$ages[1] = 25;
echo '<br />';
print_r($ages);

//add new value to array
$ages[] = 60;
echo '<br />';
print_r($ages);

array_push($ages, 70);
echo '<br />';
print_r($ages);

echo '<br />';
echo count($ages);
echo '<br />';

$peopleThree = array_merge($peopleOne, $peopleTwo);
print_r($peopleThree);
echo '<br />';


//associative arrays -> key,value pairs

$ninjasOne = ['shaun'=>'black', 'mario'=>'orange', 'luigi'=>'brown'];
echo $ninjasOne["mario"];

echo '<br />';
print_r($ninjasOne);

echo '<br />';
$ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
print_r($ninjasTwo);

//add
$ninjasTwo["toad"] = 'pink';
echo '<br />';
print_r($ninjasTwo);

//update
$ninjasTwo["peach"] = 'red';
echo '<br />';
print_r($ninjasTwo);

echo '<br />';
echo count($ninjasOne);


$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
echo '<br />';
print_r($ninjasThree);


?>


<!-- multidimensional array -->

<?php

    echo '<br />';
    // $blogs = [
    //     ['mario party','mario','lorem',30],
    //     ['mario cheats', 'toad', 'lorem', 25],
    //     ['zelda chest', 'link', 'lorem', 50]
    // ];
    // echo '<br />';
    // print_r($blogs);
    
    // echo '<br />';
    // print_r($blogs[1]);
    
    // echo '<br />';
    // print_r($blogs[1][1]);

    echo '<br />';
    $blogs = [
        ['title'=>'mario party','author'=>'mario','content'=>'lorem','likes'=>30],
        ['title'=>'mario cheats','author'=>'toad','content'=>'lorem','likes'=>25],
        ['title'=>'zelda chest','author'=>'link','content'=>'lorem','likes'=>50]
    ];
    echo $blogs[2]["author"];

    echo '<br />';
    echo count($blogs);
    
    echo '<br />';
    //add
    $blogs[] = ['title'=> 'castle party','author'=> 'peach','content'=>'lorem','likes'=>100];
    print_r($blogs);

    //remove
    echo '<br />';
    echo '<br />';
    $popped = array_pop($blogs);//removes last element
    print_r($popped);


?>   

<!-- Loops -->

<?php 
echo '<br />';

$ninjas = ['shaun','rayu','yoshi'];

// for($i=0; $i < count($ninjas); $i++) {
//     echo $ninjas[$i].'<br/>';
// }

// foreach($ninjas as $ninja) {
//     echo $ninja.'<br />';
// }


// $products = [
//     ['name' => 'shiny star', 'price' => 20],
//     ['name' => 'green shell', 'price' => 10],
//     ['name' => 'red shell', 'price' => 15],
//     ['name' => 'gold coin', 'price' => 5],
//     ['name' => 'lightning bolt', 'price' => 40],
//     ['name' => 'banana skin', 'price' => 2]
// ];

// foreach($products as $product){
//     echo $product['name'] . ' - ' . $product['price'];
//     echo '<br />';
// }


//while loop
// $i = 0;
// while($i < count($products)) {
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++;
// }
echo '<br />';
?>


<!-- Booleans and comparisons -->

<?php 

 echo true; //o/p: 1 => "1"
 echo false; //o/p: no o/p => ""

 //everytime we echo something to browser
 //we have to o/p string
    echo '<br />';
    echo gettype(true);//Type of a variable

    echo '<br />';
    echo 5 < 10;
    
    echo '<br />';
    echo 5 > 10;
    
    echo '<br />';
    echo 5 == 10;

    echo '<br />';
    echo 10 == 10;
    
    echo '<br />';
    echo 5 != 10; 
    
    echo '<br />';
    echo 5 <= 5;
    
    echo '<br />';
    echo 5 >= 5;

    //Comparison with strings
    echo '<br />';
    echo 'shaun' < 'yoshi';//o/p:true-> 1
    
    echo '<br />';
    echo 'shaun' > 'yoshi';//false
    
    echo '<br />';
    echo 'shaun' > 'Shaun';//true


    echo '<br />';
    echo 'mario' == 'mario';

    
    echo '<br />';
    echo 'mario' == 'Mario';//false



    //loose vs stric comparisons

    echo 5 == '5';//true(loosely equal)

    echo 5 === '5'; //false

    echo '<br />';
    echo true == "1";//true->"1"

    echo '<br />';
    echo false == "";//false->""

?>


<!-- Conditional statements -->
<!-- Break and Continue -->

<?php
echo '<br />';
    // $price = 20;

    // if($price < 10) {
    //     echo 'the condition is met';
    // }else if($price < 30) {
    //     echo 'elseif condition met';
    // } else {
    //     echo 'consition not met';
    // }

    $products = [
        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]
    ];

    foreach($products as $product) {
        // if($product['price'] < 15 && $product['price'] > 2) {
        //     echo $product['name'] . '<br />';
        // }


        // if($product['price'] > 20 || $product['price'] < 10) {
        //     echo $product['name'] . '<br />';
        // }

        if($product["name"] === "lightning bolt") {
            break;
        }

        if($product["price"] > 15) {
            continue;
        }

        echo $product["name"]. '<br />';


    }


?>


<!-- Functions -->


<?php 
echo '<br />';


    function sayHello($name="ameen", $time="morning") {
        echo "good $time $name"."<br />";    
    }
    sayHello('mario');
    sayHello();
    
    sayHello("yoshi","night");

    function formatProduct($product) {
       // echo "{$product['name']} costs $ {$product['price']} to buy <br />";
       return "{$product['name']} costs $ {$product['price']} to buy <br />";
    }

    //formatProduct(['name'=>'gold star','price'=> 20]);
    // $formatted = formatProduct(['name'=>'gold star','price'=> 20]);
    // echo $formatted;



?>



<!-- Variable scope -->


<?php 

    // local vars

    function myFunc() {
        $price = 10;
        echo $price;//local scope
    }

    //myFunc();
    //echo $price;//error

    function myFuncTwo($age) {
        echo $age; //local scope
    }

    myFuncTwo(25);
    echo $age; //error

    echo '<br />';
    //global variable

    $names = 'mario';

    // function sayHellos() {
    //     global $names;
    //     $names = "yoshi";
    //     echo " hello $names";//error
    // }

    // sayHellos();
    // echo $names;

        //global-pass by value
        function sayBye($name) {
            $name = "nario";
            echo "bye $name";
        }
        sayBye($names);
        echo $names;//o/p: mario
        
        echo "<br />";
        
        //global-pass by reference -'&'
        function sayBye1(&$name) {
            $name = "nario";
            echo "bye pass by reference $name";
        }



        sayBye1($names);
        echo "<br />";
        echo $names;//o/p: nario



        echo "<br />";
?>

<!-- Include and require -->

<?php 

    // include('ninjas.php'); o/p: ryu

    // require('ninjas.php'); o/p: ryu

    //include('ninjass.php'); // while this will execute next line

    //require('ninjass.php'); // this error will stop execution of next line
//or
//require 'ninjas.php'

echo "end of php";
            

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php file</title>
</head>
<body>
    <h1>
        <?php echo 'hello, ninjas'; ?>
        <div>
            
            <?php echo NAME; ?>
        </div>
        <div>
            <?php echo $age; ?>
        </div>
    </h1>

    <h2>Loops</h2>
    <h4>Products</h4>
    <ul>
        <?php foreach($products as $product) { ?>
            <!-- output html code -->
            <h2><?php echo $product['name']; ?></h2>
            <p>$ <?php echo $product["price"]; ?></p>
        <?php } ?>  
    </ul>

    <h2>Conditional statements</h2>

            <div>
                <ul>
                    <?php foreach($products as $product) { ?>
                        <?php if($product['price'] > 15) { ?>
                            <li><?php echo $product["name"] ?></li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>

    <?php include("content.php") ?>
    <?php include("content.php") ?>

</body>
</html>