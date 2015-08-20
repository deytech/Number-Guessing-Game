<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Great Number Game</title>
	<style>
	.green {
		text-align: center;
		background-color: green;
		border: 1px solid;
		width: 100px;
		padding: 50px;
	}
	.red {
		text-align: center;
		background-color: red;
		border: 1px solid;
		width: 100px;
		padding: 50px;
	}

	</style>
</head>
<body>
	<div id="container"> 
		<?php echo $this->session->userdata['number']."<br>" ?>
		<h1>Welcome to the Great Number Game</h1>
		<p>I am thinking of a number between 1-100</p>
		<p> Take a Guess</p>
		<?php if($this->session->flashdata('wrong')) {

			echo "<p class ='red'>".$this->session->flashdata('wrong')."</p>";
		}
		//<--Flashdata is the alternative to unset 
		else if ($this->session->flashdata('correct')) {
			echo "<p class='green'>".$this->session->flashdata('correct')."</p>" ;
			echo "<form action='reset' method='post'>";
			echo "<input type='submit' value ='play again' />" ;
		}

		  
		?>
		
		<form action='check_session' method='post'>
			<p><input type='text' name = 'guess'/></p>
			<input type='submit' value ='Submit'/>
		</form>	


	</div>	
</body>
</html>