<?php
/**
 * Created by PhpStorm.
 * User: bogda
 * Date: 21.12.2018
 * Time: 5:06
 */
Declaration::addStyle('landing');
Declaration::addScript('landing');
?>
<div class="main_content">

    <?php
    if (\core\User::authorised() && \core\User::isAdmin()) {
        ?>
        <div class="item_product add_product">
            <img src="/public/images/new_item.png" alt="">

            <p class="description bez_probela" style="text-align: center">
            <h2><?= Lang::_('_ADD_PRODUCT_TO_SITE') ?></h2>
            </p>
        </div>
    <?php } ?>
    <?php foreach ($res_prod as $item) { ?>
        <div class="item_product" data-id="<?= $item['id'] ?>">
            <div class="delete_product">
                <i class="far fa-trash-alt"></i>
            </div>
            <img src="<?= $item['url_imae'] != null ? '/uploads/' . $item['url_imae'] : '/public/images/image-not-found.png' ?>"
                 alt="">
            <br>
            <br>
            <span class="price">
                        <?= $item['price'] ?>
                    </span>
            <br><span class="name">
                <b><i><?= $item['name'] ?></i></b>
            </span>
            <p class="description bez_probela">
                <?php
                if (strlen($item['description']) > 140) {
                    echo substr($item['description'], 0, 140) . '<sapn style="color: #3c3fd2; font-weight: bold;">...</sapn>';
                } else {
                    echo $item['description'];
                }
                ?>
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
