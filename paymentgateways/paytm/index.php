<form class="form-inline" method="post" action="pgRedirect.php">
	<input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" type="hidden" autocomplete="off" value="<?php echo "ORDS" . rand(10000,99999999)?>">
	<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" type="hidden" autocomplete="off" value="CUST001">
	<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" type="hidden"  name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
	<input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" type="hidden" name="CHANNEL_ID" autocomplete="off" value="WEB">
	<div class="form-group">
		<label for="exampleInputName2">Amount : </label>
		<div class="input-group">
			<span class="input-group-addon">Rs</span>
			<input type="text" class="form-control" aria-label="Amount (to the nearest ruppes)" name="TXN_AMOUNT" id="TXN_AMOUNT">
		</div>
	</div>
	<button type="submit" id="name="TXN_AMOUNT"" name="TXN_AMOUNT" class="btn btn-primary"><i class="fa fa-paypal">Pay using Paytm</button>
</form>