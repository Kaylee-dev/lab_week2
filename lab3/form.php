<?php
// Lege variabelen
    $name = ""; 
    $email = "";
    $nameError = "";
    $emailError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["name"])){
            $nameError = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if(empty($_POST["email"])){
            $emailError = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }    
    }

     // test_input is een functie die voor je de code checkt op speciale tekens
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        
    }

?>

<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="style.css">
		<title>Form</title>
	</head>
	<body>
		<h1>Form</h1>
		<div class="block">
			<div class="inputs">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <!-- htmlspecialchars function zorgt ervoor dat special characters omgezet worden naar HTML entities.  $_SERVER["PHP_SELF"] is een super global variable -->
				<label>Name:</label>
				<input type="text" id="name" name="name" value="<?php echo $name ?>"> 
                <span class="error">* <?php echo $nameError;?></span>
				<br>
				<label>Email:</label>
				<input type="email" id="email" name="email" placeholder="@" value="<?php echo $email ?>">
                <span class="error">* <?php echo $emailError;?></span>
				<br>
				<input type="submit" id="submit" name="submit" value="Submit">
                </form>
			</div>
		</div>
        <div class="input">
            <h2>Je gegevens:</h2>
            <?php
            if($nameError || $emailError == true){
                "";
            } else{
                echo $name;
                echo "<br>";
                echo $email;
            }
                  
            ?>
        </div>
       
		
	</body>
</html>