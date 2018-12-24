<?php
/**
 * Created by PhpStorm.
 * User: bogda
 * Date: 21.12.2018
 * Time: 3:08
 */

Declaration::addScript('login');
Declaration::addStyle('login');
?>
<div class="wrap-login100">
    <form class="login100-form validate-form" action="/auth/login" method="post">
					<span class="login100-form-title p-b-26">
                        <?php
                        if (isset($_GET['error'])) {
                            echo Lang::_('CHANGE_DATA');
                        } else {
                            echo Lang::_('AUTHERIZATION');
                        }
                        ?>
					<div>
                        <img src="/public/favicon.ico" alt="">
                    </div>
                    </span>
        <span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

        <div class="wrap-input100 validate-input <?= isset($_GET['error']) ? 'pink' : '' ?>">
            <input class="input100" type="text" name="login">
            <span class="focus-input100" data-placeholder="<?= Lang::_('LOGIN_USER') ?>"></span>
        </div>

        <div class="wrap-input100 validate-input <?= isset($_GET['error']) ? 'pink' : '' ?>">
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="<?= Lang::_('PASSWORD_USER') ?>"></span>
        </div>

        <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
                <div class="login100-form-bgbtn"></div>
                <button class="login100-form-btn">
                    <?= Lang::_('LOGIN') ?>
                </button>
            </div>
        </div>
    </form>
</div>


