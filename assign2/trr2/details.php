<!DOCTYPE HTML> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="The Reel Room details">
        <meta name="keywords" content="details">
        <meta name="author" content="Pham Do Tien Phong,Le Dinh Minh Tri">
        <link rel="stylesheet" href="styles/style.css">
        <title>PRODUCT</title>
    </head>

    <style>
        .receipt-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .receipt-box .receipt-table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .receipt-box .receipt-table td {
            padding: 5px;
            vertical-align: top;
        }

        .receipt-box .receipt-table tr td:nth-child(2) {
            text-align: right;
        }

        .receipt-box .receipt-table tr.receipt-top .receipt-table td {
            padding-bottom: 20px;
        }

        .receipt-box .receipt-table tr.receipt-top .receipt-table td.receipt-title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .receipt-box .receipt-table tr.receipt-information .receipt-table td {
            padding-bottom: 40px;
        }

        .receipt-box .receipt-table tr.receipt-heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .receipt-box .receipt-table tr.receipt-details td {
            padding-bottom: 20px;
        }

        .receipt-box .receipt-table tr.receipt-item td {
            border-bottom: 1px solid #eee;
        }

        .receipt-box .receipt-table tr.receipt-item.last td {
            border-bottom: none;
        }

        .receipt-box .receipt-table tr.receipt-total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .receipt-box table tr.receipt-top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .receipt-box .receipt-table tr .receipt-information .receipt-table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .receipt-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .receipt--box.rtl .receipt-table {
            text-align: right;
        }

        .receipt-box.rtl .receipt-table tr td:nth-child(2) {
            text-align: left;
        }
    </style>

    <body>

    <!-- NAV -->
    
    <?php 
        include "includes/header.inc";
    ?>
    <?php
    require_once("settings.php");


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * from orders WHERE order_id='$id'";
        $kq =  mysqli_query($con, $query);
        $row = mysqli_fetch_array($kq);
    }

    ?>
    

    <!-- BODY -->
    <div class="receipt-box">
    <table cellpadding="0" cellspacing="0" class="receipt-table">
        <!-- Order ID, date -->
        <tr class="receipt-top">
        <td colspan="2">
        <!-- <table>
        <tr>
            <td class="receipt-title">
            <img src="image/Twitter.png" style="width: 100%; max-width: 300px" />
            </td>

            <td>
                Order ID #: 
                <br />
                Created: 
                
                <br />
                Due: February 1, 2015
            </td>
        </tr>
        </table> -->
        </td>
        </tr>

        <!-- Custormer Information -->

        <tr class="receipt-information">
        <td colspan="2">
        <h1>Detail Order</h1>
	<p>Order <?= $row['order_id']?></p>
        <table class="receipt-table">
        <tr>
            <td>
                Name:<?= $row['first_name'] . ' ' . $row['last_name']; ?>
               
                <br />
                Contact info: <?=$row['street']; ?> <br />
                Adrress: <?= $row['state']; ?>
                Phone :  <?= $row['phone']; ?>
                Email :  <?= $row['email']; ?>
            </td>
           
        </tr>
        </table>
        </td>
        </tr>

        <!-- Order Infomation -->

        <!-- Card infro -->
        <tr class="receipt-heading">
            <td>Payment Method</td>

            <td>Check #</td>
        </tr>

        <tr class="receipt-details">
            <td>Credit Type:</td>

            <td><?= $row['cc_type']; ?></td>
        </tr>
        <tr class="receipt-details">
            <td>Name Card:</td>

            <td><?= $row['cc_name']; ?></td>
        </tr>
        <tr class="receipt-details">
            <td>Credit Card number:</td>

            <td><?= $row['cc_number']; ?></td>
        </tr>   

        <!-- Product info -->
        <tr class="receipt-heading">
            <td>Item</td>

            <td>Price</td>
        </tr>

        <tr class="receipt-item">
        <td>Name Movie</td>
            <td><?= $row['moviechosen']; ?></td>
        </tr>

        <tr class="receipt-item">
            <td>Ticket</td>

            <td><?= $row['optionType']; ?></td>
        </tr>

        <tr class="receipt-item-last">
            <td>Combo</td>

            <td><?= $row['quantity']; ?></td>
        </tr>

        <tr class="receipt-total">
            <td></td>

            <td>Total: <?= $row['order_cost']; ?>$</td>
        </tr>

    </table>
    </div>
<?php 
    include "includes/footer.inc";
?>
	
</body>
</html>

