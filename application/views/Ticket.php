<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>POS Receipt Template Html Css</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="invoice-POS">
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2>SBISTechs Inc</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <h2>Contact Info</h2>
        <p> 
            Address : street city, state 0000</br>
            Email   : JohnDoe@gmail.com</br>
            Phone   : 555-555-5555</br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">

					<div id="table">
						<table>
							<tr class="tabletitle">
								<td class="item"><h2>Produit</h2></td>
								<td class="Hours"><h2>Qté</h2></td>
								<td class="Rate"><h2>Total</h2></td>
							</tr>
							<?php $total = 0; 
                                 foreach ($res as $key) {
                                            ?>
                                            <tr class="service">
                <td class="tableitem"><p class="itemtext"><?php echo $key->name; ?></p></td>
                <td class="tableitem"><p class="itemtext"><?php echo $key->quantité; ?></p></td>
                <td class="tableitem"><p class="itemtext"><?php echo $key->total; ?> DH</p></td>
                <?php $total = $total+$key->total; ?>
              </tr>
                               <?php } ?>
							

<?php foreach ($query5 as $key1) { 
                                                    if($key1->TVA == 0){}else{ ?>
							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>TVA(%)</h2></td>
								<td class="payment"><h2><?php echo $key1->TVA; ?> %</h2></td>
							</tr>

							<tr class="tabletitle">
								<td></td>
								<td class="Rate"><h2>Total</h2></td>
								<td class="payment"><h2><?php echo $key1->total; ?> DH</h2></td>
							</tr>
                                            <?php } } ?>
						</table>
					</div><!--End Table-->

					<div id="legalcopy">
						<p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices. 
						</p>
					</div>

				</div><!--End InvoiceBot-->
  </div><!--End Invoice-->
<!-- partial -->
  
</body>
</html>