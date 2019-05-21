<?php
print_r($_FILES);
echo file_get_contents($_FILES['userfile']['tmp_name']);
?>