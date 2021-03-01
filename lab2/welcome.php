<?php
    
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
				<form method="post" action="welcome.php">
				<label>Name:</label>
				<input type="text" id="name" name="name"> 
				<br>
				<label>Email:</label>
				<input type="email" id="email" name="email" placeholder="@">
				<br>
				<input type="submit" id="submit" name="submit" value="Submit">
                </form>
			</div>
		</div>
        <div class="input">
            <h2>De ingevulde gegevens zijn:</h2>
            <p>Name:  <?php echo $_POST["name"]; ?><br><br>
                Email:  <?php echo $_POST["email"]; ?>
            </p>
        </div>
       
		
	</body>
</html>


<!-- Vragen GET
Wat valt je op bij de GET methode in de URL?
Dat de gegevens in de URL staan.

Wanneer ga je de GET methode beslist niet gebruiken?
Als je werkt met belangerijke gegevens zoals passwords

Wanneer zou de GET methode handig zijn om wel te gebruiken?
Als je specifieke informatie gelijk wilt hebben.

Vragen POST
Wanneer ga je een POST gebruiken om formuliergegevens te verwerken?
Als de gegevens naar een server wil sturen.

Is er een reden te noemen wanneer je POST bewust niet gebruikt?
/
 -->