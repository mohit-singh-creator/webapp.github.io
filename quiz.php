<html>
<head>
	<title>Quiz</title>
	<style>
	*
	{	
		margin : 0 auto;
	}
	.a1
	{	padding-bottom: 10px;
		
		width: 99.9%;
		background-color :#33CCFF;
		font-size :30px;
		height:auto;
		font-style:italic;
		font-weight:Bold;
		text-align:center;
		
	}
	</style>
</head>
<body>
	<div class="a1">
		<h1>Hello.....Mr.<?php echo $_POST['name']?></h1>
	</div>
</body>
</head>


<?php
	session_start();
					
	$_SESSION['t1']=$_POST['name'];
	$_SESSION['t2']=$_POST['level'];
	
	
	if(isset($_POST['click']))
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
					echo "<form method='post' action='res.php'>";
					echo "<br/><br/><table border='1px' bordercolor='red'cellspacing='0'>";
					$res=mysqli_query($conn,'select * from easy');
					while($row=mysqli_fetch_array($res))
					{
						echo "<tr height='50px'>";
						echo '<td colspan="2">'.$row['ID'].'&nbsp&nbsp'.$row['Question']."</td>";
						
						echo "</tr>";
						echo "<tr>";
						
						echo "<td><input type='radio' value='1' name='choice[".$row['ID']."]'/>".$row['option1']."</td>";
						
						
						echo "<td><input type='radio' value='2' name='choice[".$row['ID']."]'/>".$row['option2']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><input type='radio' value='3' name='choice[".$row['ID']."]'/>".$row['option3']."</td>";
						
						echo "<td><input type='radio' value='4' name='choice[".$row['ID']."]'/>".$row['option4']."</td>";
						
						echo "</form>";
						echo "</tr>";
						
					}
					
					echo "</table>";
					
					
					echo "<br/><input type='submit' name='sub'style='width:300px;height :30px;margin-left: 39%;'/></form>";
				
				}
				
				if($_SESSION['t2']=='Hard')
				{	
					echo "<form method='post' action='res.php'>";
					echo "<br/><br/><table border='1px' bordercolor='red'cellspacing='0'>";
					$res=mysqli_query($conn,'select * from hard');
					while($row=mysqli_fetch_array($res))
					{
						echo "<tr height='50px'>";
						echo '<td colspan="2">'.$row['ID'].'&nbsp&nbsp'.$row['Question']."</td>";
						
						echo "</tr>";
						echo "<tr>";
						
						echo "<td><input type='radio' value='1' name='choice[".$row['ID']."]'/>".$row['option1']."</td>";
						
						
						echo "<td><input type='radio' value='2' name='choice[".$row['ID']."]'/>".$row['option2']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><input type='radio' value='3' name='choice[".$row['ID']."]'/>".$row['option3']."</td>";
						
						echo "<td><input type='radio' value='4' name='choice[".$row['ID']."]'/>".$row['option4']."</td>";
						
						echo "</form>";
						echo "</tr>";
						
					}
					
					echo "</table>";
					
					
					echo "<br/><input type='submit' name='sub'style='width:300px;height :30px;margin-left: 39%;'/></form>";
					
				}
				
				if($_SESSION['t2']=='Medium')
				{	
					echo "<form method='post' action='res.php'>";
					echo "<br/><br/><table border='1px' bordercolor='red'cellspacing='0'>";
					$res=mysqli_query($conn,'select * from medium');
					while($row=mysqli_fetch_array($res))
					{
						echo "<tr height='50px'>";
						echo '<td colspan="2">'.$row['ID'].'&nbsp&nbsp'.$row['Question']."</td>";
						
						echo "</tr>";
						echo "<tr>";
						
						echo "<td><input type='radio' value='1' name='choice[".$row['ID']."]'/>".$row['option1']."</td>";
						
						
						echo "<td><input type='radio' value='2' name='choice[".$row['ID']."]'/>".$row['option2']."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td><input type='radio' value='3' name='choice[".$row['ID']."]'/>".$row['option3']."</td>";
						
						echo "<td><input type='radio' value='4' name='choice[".$row['ID']."]'/>".$row['option4']."</td>";
						
						echo "</form>";
						echo "</tr>";
						
					}
					
					echo "</table>";
					
					
					echo "<br/><input type='submit' name='sub'style='width:300px;height :30px;margin-left: 39%;'/></form>";
				}
			}
		}
	}
?>