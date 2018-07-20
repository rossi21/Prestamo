<?php
require 'contrib/branch-coverage-to-dot.php';
include 'src/article2-Test.php';
$ruta=dirname(__FILE__);
xdebug_start_code_coverage (
        XDEBUG_CC_DEAD_CODE |
        XDEBUG_CC_UNUSED |
        XDEBUG_CC_BRANCH_CHECK
);

ifthenelse (true, false);

ifthenelse (false, true);

$info = xdebug_get_code_coverage ();
file_put_contents($ruta.'/branch.dot', branch_coverage_to_dot ($info));
