<?php
/*
 * HTSOne count-verification probe — added by a test PR, removed after.
 * Every issue below is deliberate and self-contained so the PR delta is countable.
 */

// 1. SQL injection — unsanitised request value concatenated into a query.
function probe_lookup($conn) {
    $id = $_GET['id'];
    $sql = "SELECT first_name, last_name FROM users WHERE user_id = '" . $id . "'";
    return mysqli_query($conn, $sql);
}

// 2. Hardcoded credential — AWS's own documentation example key, so it is
//    unmistakably not a live credential.
$AWS_ACCESS_KEY_ID     = "AKIAIOSFODNN7EXAMPLE";
$AWS_SECRET_ACCESS_KEY = "wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY";

// 3. Weak hash for password storage.
function probe_hash($password) {
    return md5($password);
}

// 4. Command injection — request value reaches the shell.
function probe_ping($host) {
    return shell_exec("ping -c 1 " . $_REQUEST['target']);
}
