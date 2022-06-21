<?php

require __DIR__ . '/top.php';
?>



<h1>Sweet Home Alamaba</h1>

<div class="home">
        home
    <div class="home__bin">
            bin
        <div class="home__bin__content">
            content
        </div>
    </div>
</div>

<ul>
<?php foreach($list as $value) : ?>

    <li><?= $value ?></li>
    
<?php endforeach ?>
</ul>


<?php
require __DIR__ . '/bottom.php';