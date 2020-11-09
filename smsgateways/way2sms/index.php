<html>
 <body>
   <h1>My SMS form</h1>
   <form method=post action='way2sms.php'>
       
     
       
     <?php
	if(isset($_GET['msg']))
		{
		$param=$_GET['msg'];
		if($param == "success")
			{
			    echo "<div id='message'>Message Sent Succesfully.</div>";
			    echo "<script>setTimeout(function () {message.innerHTML =''}, 10000); </script>";
			}
		else if($param == "failure")
			{
			    echo "<div id='message'>Message Sending Failed.</div>";
			    echo "<script>setTimeout(function () {message.innerHTML =''}, 10000); </script>";
			}	
		}	
	?>
   <table border=0>
   <tr>
     <td>Recipient</td>
     <td><input type='text' name='recipient'></td>
   </tr>
   <tr>
     <td>Message</td>
     <td><textarea rows=4 cols=40 name='message'></textarea></td>
   </tr>
   <tr>
     <td> </td>
     <td><input type=submit name=submit value=Send></td>
   </tr>
   </table>
   </form>
 </body>
</html>