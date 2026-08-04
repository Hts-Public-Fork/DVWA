<?php
// Test fixture for HTSOne PR scanning — Case B: the PR fixes its own findings.
// Same three functions as before, each rewritten to remove the weakness so the
// scanner should now attribute ZERO introduced findings to this PR.

// CWE-89 fixed: parameterised query, no string concatenation.
function lookup_order($conn, $order_id) {
    $stmt = mysqli_prepare($conn, "SELECT * FROM orders WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $order_id);
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_get_result($stmt);
}

// CWE-78 fixed: no shell. Argument is escaped and passed as a single argv entry.
function export_invoice($name) {
    $safe = escapeshellarg($name);
    return proc_open(['/usr/bin/invoice-export', '--name', $safe], [], $pipes);
}

// CWE-79 fixed: output encoded before it reaches the page.
function greet_customer($customer) {
    echo "<div>Welcome back, " . htmlspecialchars($customer, ENT_QUOTES, 'UTF-8') . "</div>";
}
