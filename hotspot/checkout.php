<?php
session_start();
if (isset($_POST['amount'])){
	 $amount=$_POST['amount'];
}
	
?>
<!DOCTYPE html>
<html lang="en-US">
 <meta charset="UTF-8">
<head>
	  <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Sun Net Broadband</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css">
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<title>Sellect pack</title>
</head>
<body class="size-1140">


	 <!-- TOP NAV WITH LOGO -->
      <header>
         <nav>

            <div class="line">
               <div class="s-11 m-7 l-5 center" style="padding:3%">
              <img src="images/logo.png">
               </div>
           </div>
         </nav>
      </header>


      

	<form method="post" action="PaytmKit/pgRedirect.php">
		<table border="1">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID::*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTID ::*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['user']; ?>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID ::*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel ::*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>txnAmount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $amount; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><strong><input value="Pay Now" type="submit"	onclick=""></strong></td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>






 <!-- FOOTER -->
    <footer>
         <div class="line">
            <div class="s-11 m-7 l-4 center">
             
               <p><strong><font color="blue"> Sun Net Broadband Service Provider</font></strong>
                <br>
                <strong>
<font color="red">Contact Number :</font> 7003318459</strong>
 <strong>
  <br>
<font color="red">UPI Id :</font> 7003318459@RBL</strong>
            </div>
         </div>
         <marquee><font color="#FE2E64"><strong> <font color="red"> Notice :</font> You Can Pay Us Using "<font color="#0404B4"> Google pay, </font><font color="#2E9AFE"> PAYTM,</font> <font color="#0431B4">PhonePay </font> or any Bank UPI " After Pay Please Contact us...For Your Service.</strong></font></marquee>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script>

</body>
</html>