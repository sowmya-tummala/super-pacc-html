<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Time Slot Booking</title>
	<style type="text/css">
	.button {
  			border: none;
  			color: white;
  			padding: 16px;
  			text-align: center;
  			text-decoration: none;
  			display: inline-block;
  			font-size: 16px;
  			margin: 4px 2px;
  			transition-duration: 0.4s;
  			cursor: pointer;
		}

		.button1 {
  			background-color: white; 
  			color: black; 
  			border: 2px darkgrey;
		}

		.button1:hover {
  			background-color: darkgrey;
  			color: white;
		}
	.con{
			text-align: center;
	
}
	
		#myVideo {
  position:  fixed;
  right: 0;
  bottom: 0;
  min-width: 62%;
  min-height: 20%;
  opacity: 0.8;

}
.content {
  position: relative;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width:10%;

  padding: 95px;
}

	</style>
</head>
<body class="con">
	<video autoplay muted loop id='myVideo' >
  <source src="book.mp4" type="video/mp4">
 
	</video>
	<div class='content'>
		<h1>SLOT BOOKING</h1>
		<form action="Time.php" method="POST">

		
	<input type="radio" name="radios"  value="8am" id='r1'>08:00 AM <br>
	<input type="radio" name="radios" value='9am' id='r2'>09:00 AM<br>
	<input type="radio" name="radios" value='10am' id='r3'>10:00 AM<br>
	<input type="radio" name="radios" value='11am' id='r4'>11:00 AM<br>
	<input type="radio" name="radios" value='12am' id='r5'>12:00 AM<br>
	<input type="radio" name="radios" value='1pm' id='r6'>01:00 PM<br>
	<input type="radio" name="radios" value='2pm' id='r7'>02:00 PM<br>
	<input type="radio" name="radios" value='3pm' id='r8'>03:00 PM<br>
	<input type="radio" name="radios" value='4pm' id='r9'>04:00 PM<br>
	<input type="radio" name="radios" value='5pm' id='r10'>05:00 PM<br>
	<input type="radio" name="radios" value='6pm' id='r11'>06:00 PM<br>
	<input type="radio" name="radios" value='7pm' id='r12'>07:00 PM<br>
	<input type="radio" name="radios" value='8pm' id='r13'>08:00 PM<br>
	<input type="radio" name="radios" value='9pm' id='r14'>09:00 PM<br>
	<input type="radio" name="radios" value='10pm' id='r15'>19:00 PM<br>
	<br><br>
	<input type="submit" name="submit" value="Submit" class="button button1">
</form>
</div>

</body>
</html>