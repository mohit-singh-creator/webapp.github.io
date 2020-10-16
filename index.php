<html>
<head>
	<title>Web-App/GK</title>
	<style>
		
		
		.a
		{	
			
			width:99.9%;
			height:10%;
			background-color:#0066FF;
			border :3px solid green;
			text-align:center;
		}
		.a1
		{
			font-weight:Bold;
			color: White;
			font-size:35px;
			
		}
		.a2
		{	
			margin: 0 auto;
			padding-top: 40px;
			padding-right: 500px;
			padding-left:500px;
			padding-bottom:40px;
			width:99.9% auto;
			height: 20%;
			height:auto;
			background-color:#33CCFF;
			border :3px solid black;
			
			
		}
		
	</style>
</head>
<body>
		<div class="a">
				<h1 class="a1">General Knowledge Quiz</h1>
		</div>
		<br><br><br>
		<div class="a2">
			<form margin="50%" method="POST" action="quiz.php">
					<label>Enter  Name  :</label> <input type="text" name="name"/><br/><br/>
					<label>Choose Level :</label>  <select name="level">
										<option value="Easy">Easy</option>
										<option value="Medium">Medium</option>
										<option value="Hard">Hard</option>
									</select><br/><br/>
					<input type="Submit" value="START QUIZ" name="click"/>
			</form>
		</div>


</body>
</html>