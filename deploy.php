<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo shell_exec('/usr/bin/git pull 2>&1');
}

?>
