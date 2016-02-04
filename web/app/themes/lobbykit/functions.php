<?php
$lobbykit_includes = [
  'lib/Assets.php',                // Scripts and stylesheets
  'lib/Extras.php',                // Custom functions
  'lib/Setup.php',                // Theme setup
  'lib/Papi.php',                // Papi specific helpers
  'lib/Helpers.php',            // Global helpers
  'lib/Authentications.php',    // Login, register and stuff
];
foreach ($lobbykit_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'intra'), $file), E_USER_ERROR);
    }
    require_once $filepath;
}
unset($file, $filepath);
