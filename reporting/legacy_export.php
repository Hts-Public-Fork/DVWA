<?php
// Test fixture for HTSOne PR scanning — Case C: a PR that is CLOSED WITHOUT MERGING.
// Nothing here ever reaches master, so master's posture must be completely unaffected.

// CWE-89: SQL injection in a report filter.
function report_rows($conn) {
    return mysqli_query($conn, "SELECT * FROM audit WHERE actor = '" . $_GET['actor'] . "'");
}

// CWE-95: eval on request data.
function apply_format($conn) {
    eval("\$fmt = " . $_REQUEST['format'] . ";");
}
