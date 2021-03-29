<?php
$info = new SplFileInfo('../TRPO2');
$info->getRealPath();
shell_exec( 'cd '. $info .' && composer install' );
shell_exec('git symbolic-ref --short -q HEAD>version');
