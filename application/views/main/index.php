<?php
Declaration::addStyle('landing');
Declaration::addScript('landing');
?>

<div class="main_content">
    <?php for ($i = 0; $i < 16; $i++) { ?>
        <div class="item_product">
            <img src="/public/images/kolgotki-belye-s-kotikami-dlya-devochki-gatta-02220.jpg" alt="">
            <span class="price">
                        129 грн
                    </span>
            <br><span class="name">
                <b><i>Носочки детские</i></b>
            </span>
            <p class="description bez_probela">
                Белые колготки для девочки с принтом котиков.
                состав
                78% хлопок, 18% полиамид, 2% полипропилен, 2% эластан
            </p>
            <div class="events">
            <span class="buy">
                <i class="fas fa-shopping-cart"></i>
            </span>
                <span class="easy">
                <i class="fas fa-eye"></i>
            </span>
            </div>
        </div>
    <?php } ?>

</div>
