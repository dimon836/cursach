<?php

if ($_GET['action'] === 'add') {
    setcookie($_GET['id'], 'true');
}
