<?php
function get_processor_cores_number() {
    $command = 'cat /proc/cpuinfo';

    return shell_exec($command);
}

echo get_processor_cores_number();
// Show all information, defaults to INFO_ALL
//phpinfo();

// Show just the module information.
// phpinfo(8) yields identical results.
//phpinfo(INFO_MODULES);

?>