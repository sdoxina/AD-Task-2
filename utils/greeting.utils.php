<?php
function getGreeting() {
    date_default_timezone_set('Asia/Manila');
    $hour = date("H");

    if ($hour < 12) {
        return "Good morning!";
    } elseif ($hour < 18) {
        return "Good afternoon!";
    } else {
        return "Good evening!";
    }
}
?>
