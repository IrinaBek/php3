<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nameError = $emailError = "";
        $name ="";
        $email="";
        if($_SERVER["REQUEST_METHOD"] == "POST"){//check method

            // name check
            if(empty($_POST["name"])){
                $nameError ="Name is required";
            }
            else{
                $name = $_POST["name"];
            }

            
            // email check
            if(empty($_POST["email"])){
                $emailError ="Name is required";
            }
            else{
                $email = $_POST["email"];
            }
            // email check END
            
        }

    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">

        Name:
        <input type="text" name="name">
        <span class="error"><?php echo $nameError ?></span>  <br>
        Email:
        <input type="text" name="Email">
        <span class="error"><?php echo $emailError ?></span><br>
        Message:
       <textarea name="message" cols="40" rows="5"></textarea>
       <input type="submit" value="Give me your data">
         
    </form>


    <h2><?php echo $name; ?></h2>
    <h2><?php echo $email; ?></h2>
</body>
</html>