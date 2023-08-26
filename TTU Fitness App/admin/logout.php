<?php
session_start();
include("inc/database.php");
$_SESSION['login']=="";
session_unset();
session_destroy();

?>
<script language="javascript">
document.location="login.php";
</script>
