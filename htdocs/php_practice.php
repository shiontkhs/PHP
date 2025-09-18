<!--Hello!
<h1>Hello!</h1>
<style>
    h1 {
        color: blue;
    }

</style>
<script>
    alert("Hello!");
</script> -->
<?php //echo "<b>Hello World!</b>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>Hello this is Me!</h1> -->
    <?php 
        //echo "Hello";

        //$color = "Red";
        //$Color = "Blue";
        //echo $color;
        //echo $Color;

        $color_ = 5;
        //echo $color_;

        //var_dump($color);
       //var_dump(3.0);
        //var_dump(false);
        //var_dump([1,2]);

        //$x = 5;

        //function test(){
            //$x = 10;
            //static $x = 10; //static variable
            //echo $x;
            //$x++;
            //echo "<br>";
        //}

        //test();
        //test();
        //echo & print

        //echo ("Hello"), ("Hello");
        //echo "World!", "World!";
        //print ("Hello");
        //print "World!"

        //$x = print("Hello");
        //echo $x;

        //$a = "Chan";
        // $b = 5;
        // $c = 5.9;
        // $d = true;
        // $e = [1,2,3];
        // $f = new stdClass();
        // $g = null;  
        // $h = fopen("php_practice.php", "r");

        // var_dump($a);
        // ECHO "<br>";
        // var_dump($b);
        // ECHO "<br>";
        // var_dump($c);
        // ECHO "<br>";
        // var_dump($d);
        // ECHO "<br>";
        // var_dump($e);
        // ECHO "<br>";
        // var_dump($f);
        // ECHO "<br>";
        // var_dump($g);
        // ECHO "<br>";
        // var_dump($h);
        // ECHO "<br>";
        
        // echo strlen($a);
        // echo "<br>";

        // $x = "Juan Cruz";
        // echo str_replace("Cruz", "Dela Cruz", $x);
        
        // echo trim("    Hello World!    ");
        // echo "<br>";

        // var_dump(explode("u", $x));

        //echo "Hello World!";
        //echo "<br>";

        // $x = "Hello";
        // $y = "Love!";
        
        // echo $x . " " . $y, "<br>";
        // echo "$x dgfdgfsg $y";
        // echo '<br>';
        // echo "Juan \"Immortal\" Enrile"; //error


        // $a = (String) "Chan";
        // $b = (String) 5;
        // $c = (String) 5.9;
        // $d = (String) true;
        // $e = (String) [1,2,3];
        // $g = (String) null;  
        // $h = (String) fopen("php_practice.php", "r");
        
        // unsent($a);

        // var_dump($a);
        // ECHO "<br>";
        // var_dump($b);
        // ECHO "<br>";
        // var_dump($c);
        // ECHO "<br>";
        // var_dump($d);
        // ECHO "<br>";
        // var_dump($e);
        // ECHO "<br>";
        // var_dump($g);
        // ECHO "<br>";
        // var_dump($h);
        // ECHO "<br>";

        // echo pi();

        // echo abs(6);

        // echo sqrt(2);

        //echo round(5.5);

        //echo rand(5, 20);

        //constants

        // $_asd = 5;
        // define("GREETING", 'HELLo');
        // echo GREETING;

        // function test() {
        //     echo GREETING;
        // }

        // test();

        //$X = 5;

        // +=
        //$x = $x + 10;
        // $x += 10;

        //echo $x;

        // $x %=5;

        // echo $x;

        // var_dump(5 == 5); //truenes
        // var_dump("5" === "5"); //truenes
        // var_dump(5 <> 7); //truenes
        // var_dump(5 !== "5"); //truenes
        // var_dump();

        //echo 3 <=> 2;

        //increment ++

        // pre-increment/decrement

        // $x = 5;
        // echo ++$x;

        //post-increment/decrement
        // $y = 5;
        // echo $y++;
        // echo $y;

        //logical

        // and && 
        // var_dump(true and true); // both true
        // var_dump(5=="5" && 5==5); // both true

        // or ||
        //var_dump(false or false);

        // xor
        //var_dump(true xor true); // only one true

        // ! reverse 

       // var_dump(!true);


       //string operators
       
       //.
       //$x = "Hello" . "World";

       //.= append
       //$x .= "World!";
       //echo $x;

       //php arrays

    //    $x = [1, 2, 3];
    //    $y = [3=>4, 5, 6, 7];

    //    $z = $x + $y; //union

        //print_r($x);
        //print_r($y);
       //print_r($z);

       // equal to
    //    $x = [1,2,3];
    //    $y = [1,2,3];
    //    echo $x == $y; //true


         // identical
        
        // $x = [1,2,3];
        // $y = [2=>3,2=>1,0=>1];
        // echo $x === $y; //false

        // decision making statements

        // if statement

        // if(4 == "4h"){
        //     echo "same";
        // }elseif(6>5){
        //     echo "6 is greater than 5";
        // }
        // else{
        //     echo "not same";
        // }

        //$gender = "female";
        // if($gender == "female"){echo "woman";}else{echo "mens";}
        // condition ? if true : if false;
        // echo $gender == "female" ? "woman" : "mens";

        //$x = $gender ?? null ;
        //echo $x;

        // switch statement

        // $color = "G";

        // switch($color){
        //     case "R":
        //         echo "Red";
        //         break;
        //     case "B":
        //         echo "Blue";
        //         break;
        //     case "G":
        //         echo "Green";
        //         break;
        //     default:
        //         echo "No color";
        // } 

        // true and true
        if(4=="4" && 4 == 4){}

        // atleast 1 true
        if(4=="4" || 4 == 4){}

        //xor oly 1 true, cannot be both
        if(4=="4" XOR 4 == 4){}

        //NOT
        if(!(4=="4")){}

        // PHP LOOPS

        //while loop
        
        //$x = 0;
        // while($x < 5){
        //     echo "Hello";
        //     break;
        //     $x++;
        // }
        
        //do while loop
        
        // do{
        //     echo "Hello";
        //     $x++;
            
        // }while($x < 5); 
        
        //for loop
        
        // for($x = 0; $x < 5; $x++){
        //     echo $x;
        // }
        
        //foreach loop

        // $x = array(1,2,3,4);
        
        // foreach($x as $key => $value){
        //     echo $key. "->". $value, "<br>";
        // }

        


    ?>
    <ol>
        <!-- <?php for ($x = 1; $x <= 10; $x++){ ?>
            <li> item <?php echo $x; ?> </li>
        <?php } ?> -->
          
        <!-- <?php
            $students = array(
                array("name"=>"Juan Cruz", "gender"=> "Male", "grade"=>"Grade 7"),
                array("name"=>"Maria Makiling", "gender"=> "Female", "grade"=>"Grade 11"),
                array("name"=>"Juan Luna", "gender"=> "Male", "grade"=>"First Year"),
            );
        ?>
        
      <table>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Grade</th>
            </tr>
            <?php foreach($students as $student){ ?>
                <tr>
                    <td><?php echo $student["name"]; ?></td>
                    <td><?php echo $student["gender"]; ?></td>
                    <td><?php echo $student["grade"]; ?></td>
                </tr>
            <?php } ?>
        </table> -->
                
    
    
</body>
</html>