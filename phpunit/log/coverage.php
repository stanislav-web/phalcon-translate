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
    73 => 
    array (
      0 => 'Test\\Translate\\TranslateTest::testSetLanguage',
    ),
    75 => 
    array (
      0 => 'Test\\Translate\\TranslateTest::testSetLanguage',
    ),
    76 => NULL,
    87 => 
    array (
      0 => 'Test\\Translate\\TranslateTest::testAssign',
    ),
    89 => 
    array (
      0 => 'Test\\Translate\\TranslateTest::testAssign',
    ),
    91 => 
    array (
      0 => 'Test\\Translate\\TranslateTest::testAssign',
    ),
    93 => 
    array (
    ),
    94 => 
    array (
    ),
    97 => 
    array (
    ),
    99 => 
    array (
    ),
    102 => 
    array (
    ),
    103 => 
    array (
    ),
    104 => NULL,
    106 => 
    array (
      0 => 'Test\\Translate\\TranslateTest::testAssign',
    ),
    108 => NULL,
    109 => 
    array (
    ),
    119 => 
    array (
    ),
    120 => 
    array (
    ),
    121 => NULL,
    122 => 
    array (
    ),
    123 => 
    array (
    ),
    124 => NULL,
  ),
));
$coverage->setTests(array (
  'Test\\Translate\\TranslateTest::testSetLanguage' => 0,
  'Test\\Translate\\TranslateTest::testAssign' => 4,
  'Test\\Translate\\TranslateTest::testTranslate' => 0,
));

$filter = $coverage->filter();
$filter->setBlacklistedFiles(array (
));
$filter->setWhitelistedFiles(array (
  '/Users/stanislavmenshykh/phalcon.local/vendor/stanislav-web/phalcon-translate/src/Translate/Translate.php' => true,
));

return $coverage;