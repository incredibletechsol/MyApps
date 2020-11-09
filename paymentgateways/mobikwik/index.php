<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zaakpay's dummy merchant site</title>
</head>
<script>

function autoPop(){
	document.getElementById("orderId").value= "ZPLive" + String(new Date().getTime());	//	Autopopulating orderId
	var today = new Date();
	var dateString = String(today.getFullYear()).concat("-").concat(String(today.getMonth()+1)).concat("-").concat(String(today.getDate()));
	document.getElementById("txnDate").value= dateString;
};

function submitForm(){
			var form = document.forms[0];
			form.action = "posttozaakpay.php";
			form.submit();
			}
</script>
<style type="text/css">
.center{ width:800px; margin:0 auto;}
.ecssing{width:790px;float:left;padding:15px 0 30px 10px;margin:10px 0 30px 0;background-color:#e9f0f2;filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7fbfc', endColorstr='#e9f0f2'); /* for IE */background: -webkit-gradient(linear, left top, left bottom, from(#f7fbfc), to(#e9f0f2)); /* for webkit browsers */background: -moz-linear-gradient(top, #f7fbfc, #e9f0f2); /* for firefox 3.6+ */	-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;border-radius:5px;}
.ecssing h2 {padding:0px;margin:0px 0 10px 0;font:bold 30px Calibri, Arial, Helvetica, sans-serif;text-align:Center;color:#000000;}
.ecssing p {padding:0px;margin:0px 0 20px 0;font:bold 14px  Arial, Helvetica, sans-serif;text-align:Center;	color:#000000;}
label {padding:15px 0px 5px 0; margin:0px;width:225px; float:left;font:normal 14px Arial, Helvetica, sans-serif !important;text-align:left;color:#000000;}
input {border:1px solid #848484; border-top:2px solid #848484;	background-color:#FFFFFF;padding:2px 2px; margin:0px 0 3px 0;width:200px;color:#000000;font:normal 12px Arial, Helvetica, sans-serif;text-align:left;	height:18px;}
 select {border:1px solid #848484; border-top:2px solid #848484;	background-color:#FFFFFF;padding:2px 1px 2px 2px; margin:0px 0 3px 0;width:204px;color:#000000;font:normal 12px Arial, Helvetica, sans-serif;text-align:left;	}
 .boxes {width:auto;margin:0;padding:5px 15px;text-align:center;	-webkit-border-radius: 7px;-moz-border-radius: 7px;-o-border-radius: 7px;-border-radius: 7px;text-decoration:none !important;font:bold 20px/22px Arial, Helvetica, sans-serif;color:#ffffff !important;background-color:#558a04; /* for non-css3 browsers */filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#83d801', endColorstr='#558a04'); /* for IE */background: -webkit-gradient(linear, left top, left bottom, from(#83d801), to(#558a04)); /* for webkit browsers */background: -moz-linear-gradient(top, #83d801, #558a04); /* for firefox 3.6+ */
	behavior: url(border-radius.htc);}
.boxes a {font:bold 20px/22px Arial, Helvetica, sans-serif;	text-align:center;color:#ffffff !important;	text-decoration:none !important;}
.boxes a:hover {text-decoration:none !important;}
</style>

<body onload="autoPop();">

<div class="center">
<div class="ecssing">
<form action="posttozaakpay.php" method="post">
<h2>Pay Now to see how Zaakpay will work on your website.</h2>
<p>Note: This page behaves like a shopping cart or checkout page on a website.</p>
<table width="650px;">
<tr>
	<td colspan="2" align="center" valign="middle"></td>
	
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Merchant Identifier</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="merchantIdentifier" value="b19e8f103bce406cbd3476431b6b7973" /></td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Order Id</td>
	<td width="50%" align="center" valign="middle"><input type="text" id="orderId" name="orderId" /></td>
</tr>
<!-- <tr>
	<td width="50%" align="right" valign="middle">return url(Optional)</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="returnUrl" value=""/></td>
</tr> -->
<tr>
	 <td> <input type="hidden" name="returnUrl" value="http://localhost/Zaakpay_php/Zaakpay_php/srs/response.php"/>></td> 
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Buyer Email</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerEmail" value=""  /> </td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Buyer First Name</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerFirstName" value="" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Last Name</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerLastName" value="" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Address</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerAddress" value="" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer City</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerCity" value="" /></td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Buyer State</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerState" value="" /></td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Country</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerCountry" value="" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Pincode</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerPincode" value="" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Buyer Phone No</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="buyerPhoneNumber" value="" /></td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Txntype</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="txnType" value="1" /></td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Zppayoption</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="zpPayOption" value="1" /></td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Mode</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="mode" value="1" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Currency</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="currency" value="INR" /></td>
</tr>
<tr>	
	<td width="50%" align="right" valign="middle">Amount In Paisa</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="amount" value="100" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">IPaddress</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="merchantIpAddress" value="127.0.0.1" /> </td>
</tr>
<tr>
	<td width="50%" align="right" valign="middle">Purpose</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="purpose" value="1" /></td>
</tr>


<tr>	
	<td width="50%" align="right" valign="middle">Product Description</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="productDescription" value="Zaakpay subscription fee" /> </td>
</tr>

<!--<tr>	
	<td width="50%" align="right" valign="middle">Product1 Description</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="product1Description" /> -->

<!--<tr>	
	<td width="50%" align="right" valign="middle">Product2 Description</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="product2Description" /> -->

<!--<tr>	
	<td width="50%" align="right" valign="middle">Product3 Description</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="product3Description" /> -->

<!--<tr>	
	<td width="50%" align="right" valign="middle">Product4 Description</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="product4Description" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Address</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToAddress" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To City</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToCity" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To State</td>
	<td width="50%" align="center" valign="middle"></td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToState" /> -->

<!--<tr>	
	<td width="50%" align="right" valign="middle">Ship To Country</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToCountry" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Pincode</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToPincode" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Phone Number</td>
	<td width="50%" align="center" valign="middle"> </td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToPhoneNumber" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Firstname</td>
	<td width="50%" align="center" valign="middle"></td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToFirstname" /> -->

<!--<tr>
	<td width="50%" align="right" valign="middle">Ship To Lastname</td>
	<td width="50%" align="center" valign="middle"></td>
</tr>-->
<!-- Not mandatory <input type="hidden" name="shipToLastname" /> -->

<tr>
	<td width="50%" align="right" valign="middle">Transaction Date "YYYY-MM-DD"</td>
	<td width="50%" align="center" valign="middle"><input type="text" name="txnDate" id="txnDate" /></td>
</tr>
<tr>
	<td colspan="2" width="100%" align="center" valign="middle">
		<div style="cursor:pointer; padding-top: 25px; padding-left: 230px;">
			<a class="boxes" onclick="javascript:submitForm()">Pay Now
			</a>
		</div>
	</td>	
</tr>


</table>

</form>
</div>
</div>

		
		
</body>
</html>
