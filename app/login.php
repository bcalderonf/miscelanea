<?php
/**
 * Created by PhpStorm.
 * User: RSpro
 * Date: 22/05/16
 * Time: 13:59
 */

 require_once("../assets/config.php");


?>

<link rel="stylesheet" href="../assets/login-form/css/normalize.css">

<link rel="stylesheet" href="../assets/login-form/css/style.css">

<div class="login">

    <br>

    <img src="../assets/login-form/logo.png">
    <h1>ABARROTERIA</h1>

	<br>

    <form class="loginForm">

        <input id="user" type="text" placeholder="Usuario" required="required" />
        <input id="pass" type="password" placeholder="Password" required="required" />

        <button type="submit" class="btn btn-default btn-block btn-large">

            <span class="glyphicon glyphicon-lock"></span> Ingresar

        </button>

    </form>

</div>

<script src="../assets/login-form/js/prefixfree.min.js"></script>

<script src="../assets/login-form/js/index.js"></script>





<?php include("../assets/layouts/footer.php"); ?>
