<?php

?>
<div class="add_product_form">
    <form action="/product/add-new-product" method="post" enctype="multipart/form-data">
        <div class="image">
            <img src="/public/images/new_item.png" alt="" class="product_image">
            <br>
            <br>
            <label class="fileContainer">
                ВЫБРАТЬ ФАЙЛ
                <input type="file" name="image_url" onchange="previewFile()">
            </label>
        </div>
        <div class="info">
            <input type="text" name="name" placeholder="NAME" required>
            <input type="text" name="price" placeholder="PRICE" required>
            <input type="text" name="description" placeholder="DESCRIPTION" required>
            <input type="hidden" name="group" value="<?= isset($_GET['group']) ? $_GET['group'] : ''; ?>">
            <input type="hidden" name="type" value="<?= isset($_GET['type']) ? $_GET['type'] : ''; ?>">
            <input type="submit">
        </div>
    </form>
</div>
<div class="header_menu_wrapper wrapper">
    <div class="container">
        <div class="header_logo_block">
            <a href="/"></a>
        </div>
        <div class="header_menu_block">
            <div class="block_burger_close">
                <div class="burger_close burger_menu"></div>
            </div>
            <ul class="header_menu">
                <li class="item_menu" data-item="3">
                    <span class="item_menu_link">
                        <i class="fas fa-dice"></i>
                        <?php echo Lang::_('GAMES'); ?>
                    </span>
                    <div class="item_category">
                        <a href="/product?group=games&type=boys">
                            <div class="category">
                                <?= Lang::_('GAMES_FOR_BOY') ?>
                            </div>
                        </a>
                        <a href="/product?group=games?=&type=girl">
                            <div class="category">
                                <?= Lang::_('GAMES_FOR_GIRL') ?>
                            </div>
                        </a>

                    </div>
                </li>
                <li class="item_menu" data-item="4">
                    <span class="item_menu_link">
                        <i class="fas fa-tshirt"></i>
                        <?php echo Lang::_('CLOTHES'); ?>
                    </span>
                    <div class="item_category">
                        <a href="/product?group=clothes&type=small">
                            <div class="category">
                                <?= Lang::_('CLOTHES_FOR_SMALL') ?>
                            </div>
                        </a>
                        <a href="/product?group=clothes&type=boy">
                            <div class="category">
                                <?= Lang::_('CLOTHES_FOR_BOY') ?>
                            </div>
                        </a>
                        <a href="/product?group=clothes&type=girl">
                            <div class="category">
                                <?= Lang::_('CLOTHES_FOR_GIRL') ?>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="item_menu" data-item="4">
                    <span class="item_menu_link">
                       <i class="fas fa-cookie-bite"></i>
                        <?php echo Lang::_('FOOD'); ?>
                    </span>
                    <div class="item_category">
                        <a href="/product?group=food&type=bibs">
                            <div class="category">
                                <?= Lang::_('BIBS') ?>
                            </div>
                        </a>
                        <a href="/product?group=food&type=dishes">
                            <div class="category">
                                <?= Lang::_('KIDS_DISHES') ?>
                            </div>
                        </a>
                        <a href="/product?group=food&type=botle">
                            <div class="category">
                                <?= Lang::_('BOTLE_FOOD') ?>
                            </div>
                        </a>
                        <a href="/product?group=food&type=stool">
                            <div class="category">
                                <?= Lang::_('STOOL_FOOD') ?>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="item_menu" data-item="4">
                    <span class="item_menu_link">
                        <i class="fas fa-wine-bottle"></i>
                        <?php echo Lang::_('HYGIENE'); ?>
                    </span>
                    <div class="item_category">
                        <a href="/product?group=hygiene&type=teat">
                            <div class="category">
                                <?= Lang::_('TEAT') ?>
                            </div>
                        </a>
                        <a href="/product?group=hygiene&type=brushes">
                            <div class="category">
                                <?= Lang::_('BRUSHES') ?>
                            </div>
                        </a>
                        <a href="/product?group=hygiene&type=napking">
                            <div class="category">
                                <?= Lang::_('NAPKINS') ?>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="item_menu favorite" data-item="3">
                    <a href="/basket">
                        <span class="item_menu_link">
                            <i class="fas fa-shopping-cart"></i>
                            <?php echo Lang::_('BASKET'); ?>
                            <span class="count_prod">
                                <?= isset($count_prod) == false ? 0 : $count_prod ?>
                            </span>
                        </span>
                    </a>
                </li>
                <li class="item_menu favorite" data-item="3">
                    <?
                    if (\core\User::authorised() == false) {
                        ?>
                        <a href="/auth">
                            <span class="item_menu_link">
                                <i class="fas fa-sign-in-alt"></i>
                                <?php echo Lang::_('LOGIN'); ?>
                            </span>
                        </a>
                        <?php
                    } else {
                        ?>
                        <a href="/auth/logout">
                            <span class="item_menu_link">
                                <i class="fas fa-sign-in-alt"></i>
                                <?php echo Lang::_('EXIT'); ?>
                            </span>
                        </a>
                        <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
        <div class="burger_menu">
            <div class="burger_line"></div>
        </div>
    </div>
</div>
