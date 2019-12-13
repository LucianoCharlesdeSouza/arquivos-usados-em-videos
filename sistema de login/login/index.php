<form method="post" <?php echo ajaxForm("/login/login", "form-signin") ?>>
    <?php echo csrf(); ?>


    <div class="col-md-12 text-center">
        <img class="text-center mb-4" src="<?php echo back_url("/views/make/logo.png"); ?>" alt="" width="72" height="72">
    </div>

    <h3 class="text-center h3 mb-3 font-weight-normal">Insira seus dados para logar</h3>

    <label for="inputEmail" class="sr-only">Email...</label>
    <input type="text" name="user_email" value="<?php echo getCookie('cookie_email_grupophp') ?>"  id="inputEmail" class="form-control" placeholder="Email address"  autofocus>

    <label for="inputPassword" class="sr-only">Password...</label>
    <input type="password" name="user_password" value="<?php echo getCookie('cookie_pass_grupophp') ?>" id="inputPassword" class="form-control" placeholder="Password" >

    <div class="checkbox mb-3">
        <label style="float: left">
            <input type="checkbox" name="lembrar" value="remember-me"> Lembrar-me
        </label>

        <label style="float: right;">
            <a href="<?php echo base_url("/login/create") ?>">Cadastrar-me</a>
        </label>
    </div>

    <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>-->
    <?php echo btnAjaxForm("Logar", "btn btn-lg btn-primary btn-block") ?>


    <p>
        <a href="<?php echo base_url("/login/recover") ?>">Recuperar senha</a>
    </p>

    <p class="text-center mt-5 mb-3 text-muted">&copy; MVC-git / 2017-2018</p>

</form>
