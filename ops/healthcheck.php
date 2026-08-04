<?php
// Test fixture for HTSOne scanning — Case E: a DIRECT PUSH to the default branch.
// No PR is involved, so this must be recorded as "Push", never "Merge".

// CWE-78: command injection via a diagnostic endpoint.
function ping_host() {
    system("ping -c 1 " . $_GET['host']);
}
