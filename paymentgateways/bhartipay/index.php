<?php 
include_once __DIR__.'/bppg_helper.php';

// Define environment variable
define('PG_REQUEST_URL', 'http://merchant.bhartipay.com/crm/jsp/paymentrequest');
define('PG_RESPONSE_URL', 'http://merchant.bhartipay.com/crm/jsp/response.jsp');
define('PG_RESPONSE_MODE', 'SALE');
define('PG_SALT', 'e0233775d9734d46');
define('PG_PAY_ID', '2004171518231411');

$pg_transaction = new BPPGModule;
$pg_transaction->setPayId($_REQUEST['PAY_ID']);
$pg_transaction->setPgRequestUrl(PG_REQUEST_URL);
$pg_transaction->setSalt($_REQUEST['SALT']);
$pg_transaction->setReturnUrl($_REQUEST['RETURN_URL']);
$pg_transaction->setCurrencyCode(356);
$pg_transaction->setTxnType('SALE');
$pg_transaction->setOrderId($_REQUEST['ORDER_ID']);
@$pg_transaction->setCustEmail($_REQUEST['CUST_EMAIL']);
@$pg_transaction->setCustName($_REQUEST['CUST_NAME']);
@$pg_transaction->setCustStreetAddress1($_REQUEST['CUST_STREET_ADDRESS1']);
@$pg_transaction->setCustCity($_REQUEST['CUST_CITY']);
@$pg_transaction->setCustState($_REQUEST['CUST_STATE']);
@$pg_transaction->setCustCountry($_REQUEST['CUST_COUNTRY']);
@$pg_transaction->setCustZip($_REQUEST['CUST_ZIP']);
@$pg_transaction->setCustPhone($_REQUEST['CUST_PHONE']);
@$pg_transaction->setAmount($_REQUEST['AMOUNT']*100); // convert to Rupee from Paisa
@$pg_transaction->setProductDesc($_REQUEST['PRODUCT_DESC']);
@$pg_transaction->setCustShipStreetAddress1($_REQUEST['CUST_SHIP_STREET_ADDRESS1']);
@$pg_transaction->setCustShipCity($_REQUEST['CUST_SHIP_CITY']);
@$pg_transaction->setCustShipState($_REQUEST['CUST_SHIP_STATE']);
@$pg_transaction->setCustShipCountry($_REQUEST['CUST_SHIP_COUNTRY']);
@$pg_transaction->setCustShipZip($_REQUEST['CUST_SHIP_ZIP']);
@$pg_transaction->setCustShipPhone($_REQUEST['CUST_SHIP_PHONE']);
@$pg_transaction->setCustShipName($_REQUEST['CUST_SHIP_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bhartipay Demo Merchant Checkout Page</title>
    <style type="text/css" media="screen">
        body{width:100%;margin:0 auto;background-color:#e4eff5}
        .new{width:500px;margin:20px auto 0;padding:0;font:normal 12px arial;color:#555;background:#fff;border:1px solid #d0d0d0;border-radius:5px;-webkit-box-shadow:-1px 3px 8px -1px rgba(0,0,0,0.75);-moz-box-shadow:-1px 3px 8px -1px rgba(0,0,0,0.75);box-shadow:-1px 3px 8px -1px rgba(0,0,0,0.75)}
        .signupbox{margin:20px auto 0;padding:0;font:normal 12px arial;color:#555;background:#fff;border:1px solid #d0d0d0;border-radius:5px;-webkit-box-shadow:-1px 3px 8px -1px rgba(0,0,0,0.75);-moz-box-shadow:-1px 3px 8px -1px rgba(0,0,0,0.75);box-shadow:-1px 3px 8px -1px rgba(0,0,0,0.75)}
        .signup-headingbg{background:#194e84;background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:5px 5px;height:35px;border-bottom:1px solid #dadada;font:bold 16px Tahoma;color:#fff;vertical-align:middle}
        .signuptextfield{display:block;width:98%;height:15px;padding:6px 7px;padding:6px\9;margin-left:10px;font-size:12px;font-family:'Titillium Web',sans-serif;line-height:1.428571429;color:#555;margin-bottom:5px;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}
        .signuptextfield:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}
        .labelfont{font:bold 11px Arial;color:#607a8c;text-decoration:none}
        .signupbutton{background-color:#5cb85c;border:1px solid #4cae4c;width:40%;height:35px;font:bold 14px Tahoma;text-align:center;color:#fff;cursor:pointer;border-radius:5px}
        .signupbutton:hover{background-color:#449d44;border:1px solid #398439;width:40%;height:35px;font:bold 14px Tahoma;text-align:center;color:#fff;cursor:pointer;border-radius:5px}
        .borderleftradius{border-top-left-radius:5px}
        .borderrightradius{border-top-right-radius:5px}
        .gradientbg{background-image:-ms-linear-gradient(top,#FEFEFF 0%,#BFD3E1 100%);background-image:-moz-linear-gradient(top,#FEFEFF 0%,#BFD3E1 100%);background-image:-o-linear-gradient(top,#FEFEFF 0%,#BFD3E1 100%);background-image:-webkit-gradient(linear,left top,left bottom,color-stop(0,#FEFEFF),color-stop(1,#BFD3E1));background-image:-webkit-linear-gradient(top,#FEFEFF 0%,#BFD3E1 100%);background-image:linear-gradient(to bottom,#FEFEFF 0%,#BFD3E1 100%)}
    </style>
</head>
<?php
// if form is submitted
if (isset($_REQUEST['payment_check'])) {
    $postdata = $pg_transaction->createTransactionRequest();
    $pg_transaction->redirectForm($postdata);
    exit();
} else {
    ?>
<body>
    <div class="new">
        <form action="" method="post">
            <table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="gradientbg">
                <tr>
                    <td colspan="3" align="center" valign="middle"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle" class="signup-headingbg borderleftradius borderrightradius">Demo Checkout Page</td>
                </tr>
                <tr>
                    <td align="right" valign="middle">&nbsp;</td>
                    <td align="center" valign="middle">&nbsp;</td>
                    <td align="center" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">PAY ID: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="PAY_ID" class="signuptextfield" value="<?php echo PG_PAY_ID; ?>" autocomplete="off" />
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">MERCHANT NAME: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="MERCHANTNAME" class="signuptextfield" value="Bhartipay Demo" autocomplete="off"/>
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">ORDER ID: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="ORDER_ID" class="signuptextfield" value="<?php echo 'BHARTID'.date('dmyHi')?>" autocomplete="off" />
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">AMOUNT: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="AMOUNT" class="signuptextfield" value="1"  autocomplete="off"/>
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">TXNTYPE: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="TXNTYPE" class="signuptextfield" value="SALE" autocomplete="off"/>
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">CUSTOMER NAME: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="CUST_NAME" class="signuptextfield" value="BHARTIPAY DEMO" autocomplete="off"/>
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>                   
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">CUSTOMER ADDRESS: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="CUST_STREET_ADDRESS1" class="signuptextfield" value="Gurgaon" autocomplete="off"/>
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>                   
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">CUSTOMER ZIP: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="CUST_ZIP" value="122016" class="signuptextfield" autocomplete="off"/>
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">CUSTOMER PHONE: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="CUST_PHONE" value="9911889966" class="signuptextfield" autocomplete="off"/>
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">CUSTOMER EMAILID: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="CUST_EMAIL" class="signuptextfield" value="neeraj.kumar@bhartipay.com" autocomplete="off"/>
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">PRODUCT DESC: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="PRODUCT_DESC" class="signuptextfield" value="Demo Transaction" autocomplete="off"/>
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">CURRENCY CODE: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="CURRENCY_CODE" class="signuptextfield" value="356"autocomplete="off" />
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>

                    <td width="28%" align="right" valign="middle" class="labelfont">RETURN URL: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="RETURN_URL" class="signuptextfield" value="<?php echo PG_RESPONSE_URL; ?>" autocomplete="off" />
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td width="28%" align="right" valign="middle" class="labelfont">SALT: </td>
                    <td width="65%" align="left" valign="middle">
                        <input type="text" name="SALT" class="signuptextfield" value="<?php echo PG_SALT; ?>" autocomplete="off" />
                    </td>
                    <td width="7%" align="left" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle">&nbsp;</td>
                </tr>
                <tr>
                    <!-- <td width="50%" align="right" ></td> -->
                    <td colspan="3" align="center" valign="middle">
                        <input type="hidden" name="payment_check" value="true">
                        <input type="submit" name="button" id="button" class="signupbutton" value="Pay Now" onclick="javascript:submitForm()"/>                     
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center" valign="middle">&nbsp;</td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
<?php
}
?>