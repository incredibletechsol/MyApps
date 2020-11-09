
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CCAvenue Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
	};
</script>
</head>
<body>
	<div class="container">
  <h2>CCAvenue Payment Gateway</h2>
	<form method="post" name="customerData" action="ccavRequestHandler.php">


<div class="form-group">
      
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
    </div>
 <div class="form-group">
      
      <input type="text" class="form-control" id="amount" placeholder="Enter amount" name="amount">
    </div>

				<input type="hidden" name="tid" id="tid" readonly />
				<input type="hidden" name="merchant_id" value="164511"/>
				<input type="hidden" name="order_id" value="123654789"/>
				
				<input type="hidden" name="currency" value="INR"/>
				<input type="hidden" name="redirect_url" value="http://kasturicollection.com/ccavenue/ccavResponseHandler.php"/>
				<input type="hidden" name="cancel_url" value="http://kasturicollection.com/ccavenue/ccavResponseHandler.php"/><input type="hidden" name="language" value="EN"/>
				<button type="submit" class="btn btn-default">Pay Now</button>
	      </form>
	  </div>
	</body>
</html>
