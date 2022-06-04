<?php
ob_start();

echo "hello";
echo "world";
ob_clean();

ob_flush();
?>