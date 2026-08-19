<h1><?= $title ?></h1>

<p> <?= $description ?></p>

<p> <?= $year ?> </p>

<ul>
    <?php foreach ($products as $product) { ?>
        <li><?= $product ?></li>

    <?php } ?>
</ul>