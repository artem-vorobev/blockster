<?php if (isset($_GET['blockName'])) echo execute($_GET['blockName'], isset($_POST['params']) ? $_POST['params'] : array());