<HTML>
<HEAD>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />

<meta charset="utf-8" />
<title>Payment Service Provider | Merchant Accounts</title>
<style>
.has-success .form-control, .has-success .control-label, .has-success .radio, .has-success .checkbox, .has-success .radio-inline, .has-success .checkbox-inline {
	color: #1cb78c !important;
}
.has-success .help-block {
	color: #1cb78c !important;
	border-color: #1cb78c !important;
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #1cb78c;
}
.has-error .form-control, .has-error .help-block, .has-error .control-label, .has-error .radio, .has-error .checkbox, .has-error .radio-inline, .has-error .checkbox-inline {
	color: #f0334d;
	border-color: #f0334d;
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #f0334d;
}
table {
	color: #333; /* Lighten up font color */
	font-family: "Raleway", Helvetica, Arial, sans-serif;
	font-weight: bold;
	width: 640px;
	border-collapse: collapse;
	border-spacing: 0;
}
td, th {
	border: 1px solid #CCC;
	height: 30px;
} /* Make cells a bit taller */
th {
	background: #F3F3F3; /* Light grey background */
	font-weight: bold; /* Make sure theyre bold */
	font-color: #1cb78c !important;
}
td {
	background: #FAFAFA; /* Lighter grey background */
	text-align: left;
	padding: 2px;/* Center our text */
}
label {
	font-weight: normal;
	display: block;
}
</style>
</HEAD>
<BODY>
<form class="form-horizontal" action="send_data.php" method="post">
  <!-- <form id="merchant" name="merchant" method="POST" action="http://localhost:8080/agcore/pg/v1/merchants/"> -->
  <input type="hidden" name="msg" id="msg" />
  <div class="container cs-border-light-blue"> 
    
    <!-- first line -->
    <div class="row pad-top"></div>
    <!-- end first line -->
    
    <div class="equalheight row" style="padding-top: 10px;">
      <div id="cs-main-body" class="cs-text-size-default pad-bottom">
        <div class="col-sm-9  equalheight-col pad-top">
          <div style="padding-bottom: 50px;">
            <h1>Merchant Accounts</h1>
            <div class="row">
              <div class="col-sm-12">
                <legend>Transaction Details</legend>
  <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Merchant ID</label>
                      <div class="col-sm-8">
                      <!--<input type="text" class="form-control" name="merchant_id" id="merchant_id" value="201706020001" />-->
	<input type="text" class="form-control" name="merchant_id" id="merchant_id" value="201710270001" />					  
					   <!--<input type="text" class="form-control" name="merchant_id" id="merchant_id" value="201705030004" />--> <!--telrr-->
					   <!--<input type="text" class="form-control" name="merchant_id" id="merchant_id" value="201610250001" /> GBPS Networks Pvt. Ltd.-->
                      <!--<input type="text" class="form-control" name="merchant_id" id="merchant_id" value="201611080001" /> <!--Silicon Care Broadnet Pvt Ltd -->
						<!--<input type="text" class="form-control" name="merchant_id" id="merchant_id" value="201705030010" /> <!--Bosco Public school-->
						<!--<input type="text" class="form-control" name="merchant_id" id="merchant_id" value="201705030008" /> <!-- Mafatlaal Industries-->
					  </div>
                    </div>
                  </div>
      
      <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Merchant Key</label>
                      <div class="col-sm-8">
					 <!-- <input type="text" class="form-control" name="merchant_key" id="merchant_key" value="T6N+PuDykyGgN1fQe06KNa6NzaifTHSNx7ZnBUwJX8g=" /> GBPS Networks Pvt. Ltd.-->
					<!--<input type="text" class="form-control" name="merchant_key" id="merchant_key" value="of9Tf7/31lOqPKEIQe1gFCM+ARcsDEGKD5XmXgLeFDM=" />-->
					<!--<input type="text" class="form-control" name="merchant_key" id="merchant_key" value="UJQJKssJ8w5weqzF3aitGZsuIjybBJpi1OxmECPSwjE="/> <!-- Telr Sandbox -->
                      <input type="text" class="form-control" name="merchant_key" id="merchant_key" value="oqUl4D0LqA4plZw4reAX/K3UKJoQdet0k/N6X6K4Y5k=" />
					  <!-- Telrr <input type="text" class="form-control" name="merchant_key" id="merchant_key" value="WYJ5Dz77+q81EitZdV+PdhNcWZnWez7fwYPxgdiHoHg=" />-->
                     <!--<input type="text" class="form-control" name="merchant_key" id="merchant_key" value="2boVvv/AdqOiI7fumpan0YRQdfn86rl0+OHCSU9g1Dk=" />-->
					 <!--<input type="text" class="form-control" name="merchant_key" id="merchant_key" value="4sSJBIJJOlTswJ0ftpw1f9p8TgaJjakeoPeL64SHxok" />--> <!--Bosco Public school-->
					 <!--<input type="text" class="form-control" name="merchant_key" id="merchant_key" value="hBs+yknrzZuYJ2WnYOK9YtkCJ6LbfcpyLWt2wlnjFUU=" /> <!-- Mafatlal industries-->
					 </div>
                    </div>
                  </div>
          
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Order Number</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="order_no" id="order_no" value="RC17045677" />
                      </div>
                    </div>
                  </div>
                
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Amount</label>
                      <div class="col-sm-8">
                        <input type="text"  class="form-control" name="amount" id="amount" value="16" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Country</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="country" name="country">
                          <option value="IND">India</option>
                          <option value="USA">USA</option>
                          <option value="UK">UK</option>
                        </select>
                      </div>
                    </div>
                  </div>
                
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Country Currency</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="currency" name="currency">
                          <option value="INR">Indian Rupee</option>
                          <option value="USD">US Dollar</option>
                          <option value="GBR">British Pound</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Transaction Type</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="txn_type" id="txn_type" value="SALE">
                      </div>
                    </div>
                  </div>
               
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Success URL</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="success_url" id="" value="https://www.avantgardepayments.com/captive_portal/payment_status/avantgarde">
						<!--<input type="text" class="form-control" name="success_url" id="" value="http://client.gbps.net.in/customer/ResponseAG.aspx">-->
						<!--<input type="text" class="form-control" name="success_url" id="success_url" value="http://localhost/safexpay/Response.php">-->
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Failure URL</label>
                      <div class="col-sm-8">
						<input type="text" class="form-control" name="failure_url" id="failure_url" value="https://www.avantgardepayments.com/captive_portal/payment_status/avantgarde">
						<!--<input type="text" class="form-control" name="success_url" id="" value="http://mypage.siliconcare.in/PaymentGateWay/AvantGarde/AG_PaymentResponse.aspx">-->
                        <!--<input type="text" class="form-control" name="failure_url" id="failure_url" value="http://client.gbps.net.in/customer/ResponseAG.aspx">-->
						<!--<input type="text" class="form-control" name="failure_url" id="failure_url" value="http://localhost/safexpay/Response.php">-->
                      </div>
                    </div>
                  </div>
                
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Channel</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="channel" id="channel" value="WEB" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <legend>Payment Gateway Details</legend>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Payment Gateway ID</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="pg_id" id="pg_id" value="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Paymode</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="paymode" name="paymode">
						<option value="">Select Paymode</option>
                          <option value="NB">Net Banking</option>
                          <option value="CC">Credit Card</option>
                          <option value="DB">Debit Card</option>
                          <option value="PP">Prepaid Card</option>
                          <option value="WA">Wallet</option>
                          <option value="CE">Credit Card EMI</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Scheme</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="scheme" id="scheme" value="" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Emi months</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="emi_months" id="emi_months" value="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <legend>Card Details</legend>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Card No</label>
                      <div class="col-sm-8">
                      <input type="text"  id="card_no" name="card_no"  class="form-control">
                       <?php /*?> <select class="form-control" id="card_no" name="card_no">
                          <option value="CC">Credit Card</option>
                          <option value="DB">Debit Card</option>
                          <option value="PP">Prepaid Card</option>
                          <option value="CE">Credit Card EMI</option>
                        </select><?php */?>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Expiry Month</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="exp_month" name="exp_month">
						<option value="" selected>Select Month</option>
                          <option value="01">1</option>
                          <option value="02">2</option>
                          <option value="03">3</option>
                          <option value="04">4</option>
                          <option value="05">5</option>
                          <option value="06">6</option>
                          <option value="07">7</option>
                          <option value="08">8</option>
                          <option value="09">9</option>
                         <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Expiry Year</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="exp_year" name="exp_year">
						<option value="">Select Year</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
						    <option value="2018">2018</option>
							  <option value="2019">2019</option>
							    <option value="2020">2020</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">CVV2</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="cvv2" id="cvv2" value="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Card name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="card_name" id="card_name" value="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <legend>Customer Details</legend>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Customer Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="cust_name" name="cust_name" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Email ID</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="email_id" name="email_id" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Mobile No</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="mobile_no" name="mobile_no" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Unique Id</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="unique_id" name="unique_id" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">if user is logged</label>
                      <div class="col-sm-8">
                        <select class="form-control" name="is_logged_in" id="is_logged_in">
                          <option value="Y">Yes</option>
                          <option value="N">No</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <legend>Billing Details</legend>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Bill Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="bill_address" name="bill_address" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Bill City</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="bill_city" name="bill_city" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Bill State</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="bill_state" name="bill_state" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Bill Country</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="bill_country" name="bill_country" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Bill Zip</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="bill_zip" id="bill_zip" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <legend>Shipping Details</legend>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Ship Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="ship_address" name="ship_address" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Ship City</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="ship_city" name="ship_city" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Ship State</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="ship_state" name="ship_state" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Ship Country</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="ship_country" name="ship_country" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Ship Zip</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="ship_zip" id="ship_zip" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Ship Days</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="ship_days" id="ship_days" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Address Count</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="address_count" id="address_count" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <legend>Item Details</legend>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Item Count</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="item_count" name="item_count" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Item Value</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="item_value" name="item_value" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">Item Category</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="item_category" name="item_category" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <legend>Other Details</legend>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">UDF 1</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="udf_1" name="udf_1" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">UDF 2</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="udf_2" name="udf_2" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">UDF 3</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="udf_3" name="udf_3" />
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">UDF 4</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="udf_4" name="udf_4" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="control-label col-sm-4">UDF 5</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="udf_5" name="udf_5" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-2">
                    <button class="btn btn-primary btn-lg"
											style="display: inline-block; vertical-align: middle; vert-align: middle; float: none;">Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</form>
</BODY>
</HTML>
<script type="text/javascript">
$(document).ready(function(e) {
   $("#order_no").val(Math.floor((Math.random() * 100000) + 1))
});
</script>