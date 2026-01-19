<?php
session_start();
session_unset();
session_destroy();
setcookie("welcomeName", "", time() - 3600, "/");
setcookie("visited", "", time() - 3600, "/");
?>
