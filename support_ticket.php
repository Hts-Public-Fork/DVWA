<?php
// Diagnostic run: one new weakness on a fresh branch.
function get_ticket($conn) {
    return mysqli_query($conn, "SELECT * FROM tickets WHERE id = '" . $_GET['id'] . "'");
}
