<?php
require 'inc/head.php';

if(!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}
$catalog = [ 46 => 'Pecan nuts', 36 => 'Chocolate chips', 58 =>'Chocolate cookie', 32 =>'M&M\'s&copy; cookies'];

if(empty($_SESSION['cart'])) {
    header('Location: index.php');
    exit();
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table table-striped">
            <tr>
                <th>Article</th>
                <th>Quantity</th>
            </tr>
            <?php foreach($_SESSION['cart'] as $id => $quantity) { ?>
                <tr>
                    <td><?= $catalog[$id] ?></td>
                    <td><?= $quantity ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
