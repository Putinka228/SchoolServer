<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SchoolServer</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Header -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
        		<img alt="SchoolServer" src="...">
      			</a>
				<?php
				if(isset($_SESSION["login"]))
				{
					//Для зарегистрированных
				}
				else
				{
					//Для незарегистрированных
				}
				?>
    		</div>
		</div>
	</nav>	
</head>
<body>	  
	
</body>
</html>