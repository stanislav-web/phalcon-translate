<?php
$coverage = new PHP_CodeCoverage;
$coverage->setData(array (
  '/Users/stanislavmenshykh/phalcon.local/vendor/stanislav-web/phalcon-translate/src/Translate/Translate.php' => 
  array (
    61 => 
    array (
    ),
    63 => 
    array (
    ),
    64 => NULL,
    72 => 
    array (
    ),
    74 => 
    array (
    ),
    75 => NULL,
    86 => 
    array (
    ),
    88 => 
    array (
    ),
    90 => 
    array (
    ),
    92 => 
    array (
    ),
    93 => 
    array (
    ),
    96 => 
    array (
    ),
    98 => 
    array (
    ),
    101 => 
    array (
    ),
    102 => 
    array (
    ),
    103 => NULL,
    105 => 
    array (
    ),
    107 => NULL,
    108 => 
    array (
    ),
    118 => 
    array (
    ),
    119 => 
    array (
    ),
    120 => NULL,
    121 => 
    array (
    ),
    122 => 
    array (
    ),
    123 => NULL,
  ),
));
$coverage->setTests(array (
  'UNCOVERED_FILES_FROM_WHITELIST' => NULL,
));

$filter = $coverage->filter();
$filter->setBlacklistedFiles(array (
));
$filter->setWhitelistedFiles(array (
  '/Users/stanislavmenshykh/phalcon.local/vendor/stanislav-web/phalcon-translate/src/Translate/Translate.php' => true,
));

return $coverage;