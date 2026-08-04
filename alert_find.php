<?php
function find_alert($conn) {
    return mysqli_query($conn, "SELECT * FROM alerts WHERE a = '" . $_GET['a'] . "'");
}
