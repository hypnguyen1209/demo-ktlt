<?php
session_start();
session_destroy();
unset($_SESSION["username"]);
unset($_SESSION["login"]);
header('Location: /');