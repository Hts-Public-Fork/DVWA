<?php
function find_log($conn) {
    return mysqli_query($conn, "SELECT * FROM logs WHERE t = '" . $_GET['t'] . "'");
}
