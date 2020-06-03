<?php

function searchBy($page, $place_holder, $value, $name, $btn_name)
{
    echo "
            <div class=\"col\">
                <form class=\"form-inline my-2 my-lg-0\" action={$page}_busqueda.php method=\"post\">
                    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"{$place_holder}\" name=\"{$name}\">
                    <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\" value=\"{$value}\">{$btn_name}</button>
                </form>
            </div>
        ";
}

function addBy($page, $value, $btn_name)
{
    $user = $_POST['user'] ?? '';
    if ($user == "found") {
        echo " 
            <div class=\"col\">
                <form class=\"form-inline my-2 my-lg-0\" action={$page}_nuevo.php method=\"post\">
                    <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\" value=\"{$value}\">{$btn_name}</button>
                </form>
            </div>
        ";
    }
}
