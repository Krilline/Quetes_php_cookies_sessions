<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php';?>
<?php
        if(empty($_SESSION['login']) || $_SESSION['login'] == false){
            Header('Location: http://localhost:8000/index.php');
        }
?>
<section class="cookies container-fluid">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Réf .</th>
                    <th>Produit</th>
                    <th>Prix U</th>
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Prix Tot</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['cart'] as $productId) { ?>
                <tr>
                    <td><?= $productId ?></td>
                    <td><?= $catalog[$productId]['name'] ?></td>
                    <td><?= $catalog[$productId]['price'] ?> $</td>
                    <td><?= $catalog[$productId]['description'] ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
