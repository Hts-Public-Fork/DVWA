<?php
// Fresh branch, exactly ONE new weakness.
function find_invoice($conn) {
    return mysqli_query($conn, "SELECT * FROM invoices WHERE ref = '" . $_GET['ref'] . "'");
}
