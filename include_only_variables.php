<?php
ob_start();
include ("../test-giving/index.php");
ob_end_clean();

echo $GLOBALS['test-giving'];
?>