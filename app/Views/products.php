<h1>Produits</h1>
<ul>
    <?php if (empty($products)) { ?>
        <li>Il n´y a aucun produit existant</li>
    <?php    }else { ?>

        <?php foreach ($products as $product) { ?>

            <li><?= $product['name'] ?></li>

        <?php } ?>

    <?php    } ?>
    
</ul>