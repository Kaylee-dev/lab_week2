<?php
    $name = ""; 
    $email = "";
    $nameError = "";
    $emailError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);

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
		<title>Welcome</title>
	</head>
	<body>
		<h1>Form</h1>
		<div class="block">
			<div class="inputs">
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<label>Name:</label>
				<input type="text" id="name" name="name"> 
                <span class="error">* <?php echo $nameError;?></span>
				<br>
				<label>Email:</label>
				<input type="email" id="email" name="email" placeholder="@">
                <span class="error">* <?php echo $emailError;?></span>
				<br>
				<input type="submit" id="submit" name="submit" value="Submit">
                </form>
			</div>
		</div>
        <div class="input">
            <h2>Je gegevens:</h2>
            <?php
            echo $name;
            echo "<br>";
            echo $email;
?>
        </div>
       
		
	</body>
</html>