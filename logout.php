<?php
session_start();
session_unset();
session_destroy();
header("location:i/flow/login?lo=true");
?>