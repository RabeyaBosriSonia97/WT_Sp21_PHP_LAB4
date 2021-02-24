<html>
	<body>
		<h1>Form Submitted</h1>
		<?php
			echo "Name: ". $_POST["uname"]."<br>";
			echo "Password: ". $_POST["pass"]."<br>";
			echo "Gender: ".$_POST["gender"]."<br>";
			echo "Profession: ".$_POST["profession"]."<br>";
			echo "Bio: ".$_POST["bio"]."<br>";
			$var = $_POST["hobbies"];
			for($i=0;$i<count($var);$i++){
				echo $var[$i]."<br>";
			}
			
		?>
	</body>
</html>