<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        echo "Hi";

        $myFirst = array(1,2,3,4);
        $myarray = [1,2,34,5];

        $color = array("Nick" => "Red", "George" => "blue");

        echo $color["Nick"]."<br>";

        $myMulti = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];

        echo $myMulti[2][1]."<br>";

        // username name lastname password email

        // $data = array(
        //     "username" => [$name,$lastname,$psw, $email]

        // );

        $myArray = [3,4,56,78,90];
        $count = count($myArray);//=> size
        $str =""; 
        foreach( $myArray as $banana) {
            $str.= $banana.", ";
            // if()
        }
        echo trim($str, ", ");//3, 4, 56, 78, 90


        $names = array("Nick" => "Red", "George" => "blue","Nicky"=>"yellow");
                        //$names[$key]
        foreach($names as $key => $value ) {
            echo $key;
        }
        echo "<br><br><br><br>"

        $test1 = [1,2,42,67,99,3,5,6];
        $test = [
            "one" => 1,
            "five" =>5,
            "three" =>3
        ];

        echo sort($test1)."<br>";
    


        function myfunc($name) {
            echo $name;
        }




    ?>

</body>
</html>