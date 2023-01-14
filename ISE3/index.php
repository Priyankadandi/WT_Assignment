<!DOCTYPE html>
<html lang="en">
   <head>
		<title>Corona -Curfew E-Pass Form Application</title>
	</head>
	<style>
		input {
		  padding: 12px 20px;
		  margin: 10px 0;
		  display: flex;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}
		div {
		  background-color: #C4A484;
		  height: 500px;
  		  padding: 20px;
  		  width: 400px;
		  box-sizing: border-box;
		  align-content: center;
		  margin: 100px;
		}
		input[type=submit] {
		  border-radius: 12px;
		  border: 0;
		  box-sizing: border-box;
		  cursor: pointer;
		  font-size: 14px;
		  height: 50px;
		  margin-top: 25px;
		  text-align: center;
		  width: 25%;
		}
		label{
			float: left;
			margin:10px;  
			font-family: sans-serif;
			color:#4c3228;
			font-style: bold;
		}
	</style>
	<body>
		<center>
		<div>
			<h2 style="color:#4c3228">Corona -- Curfew E-Pass Form Application</h2>
			<hr>
			<form method="POST" action="insert.php">
				<label>Full Name :</label>
				<input type="text" name="full_name" id="full_name">
				<label>Mobile No. :</label>
				<input type="number" name="mobno" id="mobno">
				<label>Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="addr" id="addr">
				<label>Purpose :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="purpose" id="purpose">
				<label>Vehicle No. :</label>
				<input type="text" name="vehno" id="vehno">
				<input type="submit" value="submit">
			</form>
		</div>
		</center>
	</body>
</html>