<?php
$coverage = new PHP_CodeCoverage;
$coverage->setData(array (
  '/Users/stanislavmenshykh/phalcon.local/vendor/stanislav-web/phalcon-translate/src/Translate/Translator.php' => 
  array (
    64 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testSetTranslatePath',
    ),
    66 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testSetTranslatePath',
    ),
    67 => NULL,
    76 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testSetLanguage',
    ),
    78 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testSetLanguage',
    ),
    79 => NULL,
    90 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
      1 => 'Test\\Translate\\TranslatorTest::testAssignException',
    ),
    92 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
      1 => 'Test\\Translate\\TranslatorTest::testAssignException',
    ),
    94 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
      1 => 'Test\\Translate\\TranslatorTest::testAssignException',
    ),
    96 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testAssign',
    ),
    97 => 
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
    125 => 
    array (
      0 => 'Test\\Translate\\TranslatorTest::testTranslate',
    ),
    126 => 
    array (
    ),
    127 => NULL,
    128 => 
    array (
    ),
    129 => NULL,
  ),
));
$coverage->setTests(array (
  'Test\\Translate\\TranslatorTest::testSetTranslatePath' => 0,
  'Test\\Translate\\TranslatorTest::testSetLanguage' => 0,
  'Test\\Translate\\TranslatorTest::testAssign' => 0,
  'Test\\Translate\\TranslatorTest::testAssignException' => 0,
  'Test\\Translate\\TranslatorTest::testTranslate' => 4,
));

$filter = $coverage->filter();
$filter->setBlacklistedFiles(array (
));
$filter->setWhitelistedFiles(array (
  '/Users/stanislavmenshykh/phalcon.local/vendor/stanislav-web/phalcon-translate/src/Translate/Translator.php' => true,
));

return $coverage;