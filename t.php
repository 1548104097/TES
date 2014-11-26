<?php
//execute('whoami'); exit;
execute('git push origin master');
 
function execute($command, $output = array(), $retval = 0) {
    echo 'last line:', exec($command, $output, $retval), '<br />';
    echo 'output:', var_dump($output), '<br />';
    echo 'return value:', $retval, '<br />';
}

