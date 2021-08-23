<?php
$conn = new mysqli('50.62.209.74:3306', 'activep', 'Sek68^2w', 'ladderxenon_activprint');

/*
 * This is the "official" OO way to do it,
 * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
 */
if ($conn->connect_error) {
    die('Connect Error (' . $conn->connect_errno . ') '
            . $conn->connect_error);
}



