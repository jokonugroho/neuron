<?php

$content = '<b>lorem ipsum</b>';
echo htmlspecialchars($content);

//menghapus script aneh
$content = '<script>alert("hello world")</script>';
?>