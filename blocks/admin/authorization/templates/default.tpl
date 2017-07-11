<form method="POST">
<div class="modal-wrap">
    <div class="modal card xs-11 sm-10 md-6 lg-4">
        <div class="card-header">
            <i class="fa fa-lg fa-sign-in"></i> Вход на сайт
            <div class="cart-header-controls">
                <a href="<?=SITE_URL?>" class="btn btn-primary btn-square"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="card-section">
            <div class="grid split-1">
                <?php if (!empty($errors)) { ?>
                <div class="cell xs-12">
                    <div class="alert alert-danger"><?=implode('<br>', $errors)?></div>
                </div>
                <?php } ?>
                <div class="cell xs-4 r">
                    <label>Логин</label>
                </div>
                <div class="cell xs-8">
                    <input type="text" name="login" autocomplete="off" value="<?=$login?>">
                </div>
                <div class="cell xs-4 r">
                    <label>Пароль</label>
                </div>
                <div class="cell xs-8">
                    <input type="password" name="password">
                </div>
            </div>
        </div>
        <div class="card-section r">
            <input type="submit" name="authorize" class="btn btn-primary" value="Войти">
        </div>
    </div>
</div>
</form>