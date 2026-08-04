<?php
// Test fixture — verifies fingerprint-based recurrence. Exactly ONE new weakness,
// so a branch cut from master must report New 1 and Known = all of master's.
function search_trail($conn) {
    return mysqli_query($conn, "SELECT * FROM trail WHERE q = '" . $_GET['q'] . "'");
}
