<?php
include('header.php');
include('config.php');
$productName = "Producto de prueba";
$currency = "EUR";
$productPrice = 50;
$productId = 123456;
$orderNumber = 546;
?>
<title>Paypal PHP integración</title>
<?php include('contenedor.php'); ?>
<div class="container">
    <h2>Paypal PHP integración</h2>
    <br>
    <table class="table">
        <tr>
            <td style="width:150px"><img src="producto_demo.jpg" style="width:50px" /></td>
            <td style="width:150px">$<?php echo $productPrice; ?></td>
            <td style="width:150px">
                <?php include 'paypalCheckout.php'; ?>
            </td>
        </tr>
    </table>
</div>
<?php include('footer.php'); ?>