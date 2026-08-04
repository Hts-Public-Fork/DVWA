<?php
// Test fixture for HTSOne PR scanning — Case A: a PR that introduces new findings.
// Each function below carries one deliberate, well-known weakness so the scanner has
// something unambiguous to attribute to this PR.

// CWE-89: SQL injection — user input concatenated straight into the query.
function lookup_order($conn, $order_id) {
    $sql = "SELECT * FROM orders WHERE id = '" . $_GET['order_id'] . "'";
    return mysqli_query($conn, $sql);
}

// CWE-78: OS command injection — user input passed to the shell.
function export_invoice($name) {
    system("/usr/bin/invoice-export --name " . $_POST['name']);
}

// CWE-79: reflected XSS — unescaped input echoed back to the page.
function greet_customer() {
    echo "<div>Welcome back, " . $_GET['customer'] . "</div>";
}
