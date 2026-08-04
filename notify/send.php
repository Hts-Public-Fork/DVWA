<?php
// Fixture: a fresh branch off master with exactly ONE new weakness.
// Expect New 1 and Known = every one of master's findings.
function notify_user($conn) {
    return mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $_GET['email'] . "'");
}
