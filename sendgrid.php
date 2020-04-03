<!DOCTYPE html>
<html>
<head>
	<title>Send Email</title>
</head>
<body>

<h2>HTML Forms</h2>

			<form action="/action_page.php">
			  <label for="fname">First name:</label><br>
			  <input type="text" id="fname" name="fname" value=""><br>
			  <label for="lname">Last name:</label><br>
			  <input type="text" id="lname" name="lname" value=""><br><br>
			  <input type="submit" value="Send Email">
			</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>








<?php 
$API_KEY= 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



echo "export SENDGRID_API_KEY= $API_KEY " > sendgrid.env
echo "sendgrid.env" >> .gitignore
source ./sendgrid.env
 ?>