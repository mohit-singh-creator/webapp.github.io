<html>
<head>
	<title>Web-App/GK</title>
	<style>
		
		
		.a
		{	
			
			width:99.9%;
			height:15%;
			background-color:#707070;
			border :3px solid #E8E8E8;
			text-align:center;
			
		}
		.a1
		{
			font-weight:Bold;
			color: #ffcccc;
			font-size:45px;
			
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
			color:white;
			font-size:25px;
			border :3px solid black;
			
			
		}
		body
		{
		    background-image:url('https://images.unsplash.com/photo-1602508862896-f709e969b7be?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');
		    background-color:#cccccc;
		    background-repeat:no-repeat;
		    background-size:cover;
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
