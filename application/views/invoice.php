<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <?php include('logo.php'); ?>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/pages/invoice.css">
    <!-- END: Page CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<style type="text/css">
        @media print {
  .hide {  display:none; }
  
}
.display {
    display: none;
  }
   .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

   <?php include('header.php'); ?>

        <div class="content-wrapper">
            <div class="content-body">
                <section class="card invoice-page" id="facture" >
                    <div id="invoice-template" class="card-body">
                        <!-- Invoice Company Details -->
                        <?php foreach ($query5 as $key1) { ?>
                        <div id="invoice-company-details" class="row">
                            <div class="col-md-6 col-sm-12 text-left pt-1">
                                <div class="media pt-1">
                                    <img src="<?php echo base_url(); ?>assets/app-assets/images/logo/logo.png" alt="company logo" class="" />
                                </div>
                            </div>
                        
                            <div class="col-md-6 col-sm-12 text-right">
                                <h1>Facture</h1>
                                <div class="invoice-details mt-2">
                            <h6>Facture N : <?php echo $key1->id_bons; ?>.</h6>
                                    <h6 class="mt-2">Date de facture</h6>
                                    <p><?php echo $key1->date; ?></p>
                                </div>
                            </div>
                        
                        </div>
                        <!--/ Invoice Company Details -->

                        <!-- Invoice Recipient Details -->
                        <div id="invoice-customer-details" class="row pt-2">
                            <div class="col-md-6 col-sm-12 text-left">
                                <h5>Recipient</h5>
                                <?php if ($key1->clien == 'particulier') { ?>
                                    <div class="recipient-info my-2">
                                    <h3>particulier</h3>
                                </div>
                               <?php }else{
                                   $result = $this->Model->get_by('cliens','id',$key1->clien); 
                                   foreach ($result as $key2) { ?>
                                 <div class="recipient-info my-2">
                                    <p><?php echo $key2->nom.' '.$key2->pre; ?></p>
                                    <p><?php echo $key2->adress ; ?></p>
                                </div>
                                <div class="recipient-contact pb-2">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        <?php echo $key2->mail ; ?>
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        <?php echo $key2->tele ; ?>
                                    </p>
                                </div>
                                   <?php } } ?>
                               
                            </div>
                        <?php } ?>
                        <?php $get = $this->Model->get('info'); 
                        foreach ($get as $key3) { ?>
                            <div class="col-md-6 col-sm-12 text-right">
                                <h5><?php echo $key3->name; ?></h5>
                                <div class="company-info my-2">
                                    <p><?php echo $key3->adress; ?></p>
                                </div>
                                <div class="company-contact">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        <?php echo $key3->mail; ?>
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        <?php echo $key3->tele; ?>
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        <?php echo $key3->tele1; ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                           
                        </div>

                        <!--/ Invoice Recipient Details -->

                        <!-- Invoice Items Details -->
                        <div id="invoice-items-details" class="pt-1 invoice-items-table">
                            <div class="row">
                                <div class="table-responsive col-sm-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>NOM DE PRODUIT</th>
                                                <th>Référence</th>
                                                <th>Quantité </th>
                                                <th>Prix</th>
                                                <th>Remise</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total = 0; 
                                            foreach ($res as $key) {
                                            ?>
                                            <tr>
                                                <td><?php echo $key->name; ?></td>
                                                <td><?php echo $key->ref; ?></td>
                                                <td><?php echo $key->quantité; ?></td>
                                                <td><?php echo $key->prix_s; ?> DH</td>
                                                <td><?php echo $key->remise; ?> %</td>
                                                <td><?php echo $key->total; ?> DH</td>
                                                <?php $total = $total+$key->total; ?>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="invoice-total-details" class="invoice-total-table">
                            <div class="row">
                                <div class="col-7 offset-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th>SUBTOTAL</th>
                                                    <td><?php echo $total; ?> DH</td>
                                                </tr>
                                                <?php foreach ($query5 as $key1) { 
                                                    if($key1->TVA == 0){}else{ ?>

                                                <tr>
                                                    <th>TVA(%)</th>
                                                    <td><?php echo $key1->TVA; ?> %</td>
                                                </tr>
                                                <tr>
                                                    <th>TOTAL</th>
                                                    <td><?php echo $key1->total; ?> DH</td>
                                                </tr>
                                            <?php } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> 
                                            <div class="col-12">
                                                <!-- Outline buttons -->
                                                <button type="button" onclick="fun()" class="btn btn-outline-success mr-1 mb-1 hide">Imprime</button>
                                                <button type="button" class="btn btn-outline-info mr-1 mb-1 hide" onclick="change()">Ticket</button>
                                            </div>
                            </div>
                        </div>

                    </div>
                </section>
                                                                <section id="ticket" class="display">
                                                                     <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table><?php foreach ($query5 as $key1) { ?>
                        <tr>

                            <td class="title">
                                <img src="https://www.sparksuite.com/images/logo.png" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Facture #: <?php echo $key1->id_bons; ?>.<br>
                                Created: <?php echo $key1->date; ?><br>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                             
                                <?php if ($key1->clien == 'particulier') { ?>
                                    <td><h5>Recipient</h5>
                                        <h3>particulier</h3>
                                     </td>
                                <?php }else{
                                    $result = $this->Model->get_by('cliens','id',$key1->clien); 
                                    if (!empty($result)) {
                                         foreach ($result as $key2) { ?>
                            <td><h5>Recipient</h5>
                                <h3><?php echo $key2->nom.' '.$key2->pre; ?></h3>
                                <?php echo $key2->adress ; ?><br>
                                <?php echo $key2->mail ; ?><br>
                                <?php echo $key2->tele ; ?><br>
                            </td>
                                   <?php } }else{ ?>
                                           <td><h5>Recipient</h5>
                                        <h3>particulier</h3>
                                     </td>
                                   <?php } } ?>
                                  
                                    <?php $get = $this->Model->get('info'); 
                        foreach ($get as $key3) { ?>
                        
                           
                            <td>
                                <h3><?php echo $key3->name; ?></h3>
                                <?php echo $key3->adress; ?><br>
                                <?php echo $key3->mail; ?><br>
                                <?php echo $key3->tele; ?><br>
                                 <?php echo $key3->tele1; ?>
                            </td>
<?php } ?>
                        </tr>
                    </table>
                </td>
            </tr>
            
            
            <tr class="heading">
                <td> Produit </td>
                <td><center> Quantité </center></td>
                <td>  prix </td>
            </tr> 
            <?php $total = 0; 
                                            foreach ($res as $key) {
                                            ?>
                                            <tr class="item">
                                                <td><?php echo $key->name; ?></td>
                                                <td><center><?php echo $key->quantité; ?></center></td>
                                                <td><?php echo $key->total; ?> DH</td>
                                                <?php $total = $total+$key->total; ?>
                                            </tr>
                                            <?php } ?>
             <tr>
                                                    <th>SUBTOTAL</th>
                                                    <td></td>
                                                    <td><?php echo $total; ?> DH</td>
                                                </tr>
                                                <?php foreach ($query5 as $key1) { 
                                                    if($key1->TVA == 0){}else{ ?>

                                                <tr>
                                                    <th>TVA(%)</th>
                                                    <td></td>
                                                    <td><?php echo $key1->TVA; ?> %</td>
                                                </tr>
                                                <tr class="total">
                                                    <td></td>
                                                    <td>Total: <?php echo $key1->total; ?> DH</td>
                                                </tr>
                                            <?php } } ?>
        </table>
    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" onclick="fun()" class="btn btn-outline-success mr-1 mb-1 hide">Imprime</button>
                                                                        <button type="button" class="btn btn-outline-info mr-1 mb-1 hide" onclick="change1();">Facture</button>
                                                                    </div>
                                                                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include('footer.php'); ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->
    <script>
            function fun() {
                window.print()
            }
            function change() {
                 document.getElementById("facture").className = "display";
                 document.getElementById("ticket").className = "salam";
            }
            function change1() {
                 document.getElementById("facture").className = "salam";
                 document.getElementById("ticket").className = "display";
            }
    </script>
    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>