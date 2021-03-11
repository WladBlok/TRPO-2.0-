<?php
shell_exec('php composer update');
shell_exec('git symbolic-ref --short -q HEAD>version');
