<?php
session_start();
require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <table class="table table-striped">
        <thead>
            <th scope="col">Cookies</th>
            <th scope="col">Quantité</th>
        </thead>
        <tbody>
<?php
foreach ($_SESSION['cart']['cookie'] as $cookies => $cookie) {
    foreach ($_SESSION['cart']['cookie'][$cookie] as $quantity => $nb) {
        ?>
        <tr>
            <td><?= $cookie ?></td>
            <td><?= $nb ?></td>
        </tr>
    <?php }
}?>
        </tbody>
    </table>
</section>
<?php require 'inc/foot.php'; ?>
