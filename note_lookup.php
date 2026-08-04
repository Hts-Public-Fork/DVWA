<?php
// Dedup diagnostic run.
function get_note($conn) {
    return mysqli_query($conn, "SELECT * FROM notes WHERE k = '" . $_GET['k'] . "'");
}
