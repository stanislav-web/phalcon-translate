<?php
$coverage = new PHP_CodeCoverage;
$coverage->setData(array (
  '/Users/stanislavmenshykh/phalcon.local/vendor/stanislav-web/phalcon-translate/src/Translate/Translator.php' => 
  array (
    65 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testSetTranslatePath',
    ),
    67 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testSetTranslatePath',
    ),
    68 => NULL,
    77 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testSetLanguage',
    ),
    79 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testSetLanguage',
    ),
    80 => NULL,
    91 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
      1 => 'Test\\Translate\\TranslatorTest::testAssignException',
    ),
    93 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
      1 => 'Test\\Translate\\TranslatorTest::testAssignException',
    ),
    95 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
      1 => 'Test\\Translate\\TranslatorTest::testAssignException',
    ),
    97 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    98 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    101 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    103 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    106 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    108 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    109 => NULL,
    111 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssignException',
    ),
    113 => NULL,
    114 => 
    array (
    ),
    127 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    128 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    129 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    130 => NULL,
    131 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    132 => NULL,
    134 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    136 => NULL,
  ),
));
$coverage->setTests(array (
  'Test\\Translate\\TranslatorTest::testSetTranslatePath' => 0,
  'Test\\Translate\\TranslatorTest::testSetLanguage' => 0,
  'Test\\Translate\\TranslatorTest::testAssign' => 0,
  'Test\\Translate\\TranslatorTest::testAssignException' => 0,
));

$filter = $coverage->filter();
$filter->setBlacklistedFiles(array (
));
$filter->setWhitelistedFiles(array (
  '/Users/stanislavmenshykh/phalcon.local/vendor/stanislav-web/phalcon-translate/src/Translate/Translator.php' => true,
));

return $coverage;