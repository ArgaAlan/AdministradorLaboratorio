<!--INITIALIZE FOR THIS PAGE-->
<?php require_once('../functions/initialize.php'); ?>
<?php $page_title = 'Inicio de sesion'; ?>
<?php include(PAGES_PATH . '/staff_header.php'); ?>
<div class="container">
    <br>
    <div class="row">
        <div class="col">
            <form class="form-inline my-2 my-lg-0" method="post" action="login.php">
                <input class="form-control mr-sm-4" type="text" placeholder="Usuario" name="user">
                <input class="form-control mr-sm-4" type="text" placeholder="Contraseña" name="password">
                <button class="btn btn-outline-success my-4 my-sm-0" type="submit" value="user">Iniciar Sesion</button>
            </form>
            <?php
            $password = $_POST['password'] ?? '';
            $user = $_POST['user'] ?? '';

            if ($user != '' && $password != '') {
                $found = false;
                //Revisar si existe usuario y si no found se mantiene en falso
                $result = find_by_column("users", "user", $user);
                while ($password_r = mysqli_fetch_assoc($result)) {
                    if ($password_r['password'] == $password && $password_r['user'] == $user) {
                        $found = true;
                        break;
                    }
                }
                if ($found) {
                    echo "
                        <form id=\"myForm\" action=../index.php method=\"post\">
                            <input type=\"hidden\" name=\"values[]\" value=found>
                        </form>
                        <script type=\"text/javascript\">
                            document.getElementById(\"myForm\").submit();
                        </script>
                    ";
                } else {
                    echo "<h3>Usuario o contraseña no validos</h3>";
                }
            }
            ?>
        </div>
    </div>
    <br>
</div>

<!--INITIALIZE FOR THIS PAGE-->
<?php include(PAGES_PATH . '/staff_footer.php'); ?>
<!--INITIALIZE FOR THIS PAGE-->