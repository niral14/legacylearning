<?php
require 'config/constants.php';
// destroy all session and redirect user to home page
session_destroy();
header('location: ' . 'http://localhost/legacylearning/index.php');
die();
