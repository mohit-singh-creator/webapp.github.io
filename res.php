<html>
<head>
	<title>Result</title>
	<style>
	.a1
	{	padding-bottom: 10px;
		
		width: 99.9%;
		background-color :#33CCFF;
		font-size :30px;
		height:60px;
		font-style:italic;
		font-weight:Bold;
		text-align:center;
		
	}


	</style>
</head>
<body>
	<div class="a1">
		<h1>Result</h1>
	</div>
</body>
</head>



<?php
	session_start();
	if(isset($_POST['sub']))
	{	
		$servername="localhost";
		$username="root";
		$password="";
		
		$conn= mysqli_connect($servername,$username,$password);
		if($conn)
		{
			$db=mysqli_select_db($conn,'webapp');
			if($db)
			{
				if($_SESSION['t2']=='Easy')
				{
					if(!empty($_POST['choice']))
					{
						$count=count($_POST['choice']);
						echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Out of 5 you have attempted  ".$count."  questions;'/>";
						
						$result=0;
						$i=1;
						$selected=$_POST['choice'];
						
						$q="select * from easy";
						$query=mysqli_query($conn,$q);
						while($rows=mysqli_fetch_array($query))
						{
							
							if($rows['Answer']==$selected[$i])
							{
								$result++;
							}
							$i++;
						}
						if($result==5)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  Very STRONG......GK you have'/>";
						
						if($result==4)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  STRONG......GK you have'/>";
						
						
						if($result==3)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  GOOD......GK you have'/>";
						
						
						if($result==2)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  BAD......GK you have'/>";
						
						
						if($result<=1)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  POOR......GK you have'/>";
					}
				}
				if($_SESSION['t2']=='Hard')
				{
					if(!empty($_POST['choice']))
					{
						$count=count($_POST['choice']);
						echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Out of 5 you have attempted  ".$count."  questions;'/>";

						
						$result=0;
						$i=1;
						$selected=$_POST['choice'];
						
						$q="select * from hard";
						$query=mysqli_query($conn,$q);
						while($rows=mysqli_fetch_array($query))
						{
							
							if($rows['Answer']==$selected[$i])
							{
								$result++;
							}
							$i++;
						}
						if($result==5)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  Very STRONG......GK you have'/>";
						
						if($result==4)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  STRONG......GK you have'/>";
						
						
						if($result==3)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  GOOD......GK you have'/>";
						
						
						if($result==2)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  BAD......GK you have'/>";
						
						
						if($result<=1)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  POOR......GK you have'/>";
					}
				}
				if($_SESSION['t2']=='Medium')
				{
					if(!empty($_POST['choice']))
					{
						$count=count($_POST['choice']);
						echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Out of 5 you have attempted  ".$count."  questions;'/>";
						
						$result=0;
						$i=1;
						$selected=$_POST['choice'];
						
						$q="select * from medium";
						$query=mysqli_query($conn,$q);
						while($rows=mysqli_fetch_array($query))
						{
							
							if($rows['Answer']==$selected[$i])
							{
								$result++;
							}
							$i++;
						}
						if($result==5)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  Very STRONG......GK you have'/>";
						
						if($result==4)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  STRONG......GK you have'/>";
						
						
						if($result==3)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  GOOD......GK you have'/>";
						
						
						if($result==2)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  BAD......GK you have'/>";
						
						
						if($result<=1)
							echo "<br/><br/> <input type='submit' style='font-size:50px;width:100%; height :100px;' value='Total Score is  ".$result."  POOR......GK you have'/>";
					}
				}
			}
			
		}
	
	}
?>