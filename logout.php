<?php
require_once 'classes/Utils.php';

session_start();

session_destroy();

Utils::redirect('login.php');
