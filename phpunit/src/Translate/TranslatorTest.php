<?php
namespace Test\Translate;
use Translate\Translator;
use Phalcon\Translate\Adapter\NativeArray as TranslateAdapterArray;

/**
 * Class TranslatorTest
 *
 * @package Test\Translate
 * @subpackage Test\Translate\TranslatorTest
 * @since   PHP >=5.4.28
 * @version 1.0
 * @author  Stanislav WEB | Lugansk <stanisov@gmail.com>
 *
 */
class TranslatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @const testing class
     */
    const TEST_CLASS =   'Translate\Translator';

    /**
     * @const testing language
     */
    const TEST_PATH =   './phpunit/languages/';

    /**
     * @const testing language
     */
    const TEST_LANG =   'ru';

    /**
     * @const testing part of translate
     */
    const TEST_PART =   'menu';

    /**
     * Init class object
     *
     * @var Translate
     */
    private $translate;

    /**
     * Signature adapter
     *
     * @var \Phalcon\Translate\Adapter\NativeArray $adapter
     */
    private $signature;

    /**
     * ReflectionClass
     *
     * @var \ReflectionClass
     */
    private $reflection;

    /**
     * Initialize testing object
     *
     * @uses Init
     * @uses \ReflectionClass
     */
    public function setUp()
    {
        $this->reflection       = new \ReflectionClass(self::TEST_CLASS);
        $this->translate        = new Translator();
    }

    /**
     * Kill testing object
     *
     * @uses Init
     */
    public function tearDown()
    {
        $this->translate = null;
    }

    /**
     * Setup accessible any private (protected) property
     *
     * @param $name
     * @return \ReflectionMethod
     */
    protected function getProperty($name)
    {
        $prop = $this->reflection->getProperty($name);
        $prop->setAccessible(true);
        return $prop;
    }

    /**
     * @covers \Translate\Translator::setTranslatePath()
     */
    public function testSetTranslatePath() {

        // 1. check method exist

        $this->assertTrue(
            method_exists($this->translate, 'setTranslatePath'),
            '[-] Class Translate must have method setTranslatePath()'
        );

        // 2. check method modifier

        $modifiers = (new \ReflectionMethod(self::TEST_CLASS, 'setTranslatePath'))->getModifiers();
        $this->assertEquals(['public'], \Reflection::getModifierNames($modifiers),
            "[-] setTranslatePart() method must be as public"
        );

        $setTranslatePart = $this->translate->setTranslatePath(self::TEST_PATH);

        // 3. check instance of method

        $this->assertInstanceOf($this->reflection->getName(), $setTranslatePart,
            "[-] setTranslatePart() method must be as instance of ".self::TEST_CLASS
        );

    }

    /**
     * @covers \Translate\Translator::setLanguage()
     */
    public function testSetLanguage() {

        // 1. check method exist

        $this->assertTrue(
            method_exists($this->translate, 'setLanguage'),
            '[-] Class Translate must have method setLanguage()'
        );

        // 2. check method modifier

        $modifiers = (new \ReflectionMethod(self::TEST_CLASS, 'setLanguage'))->getModifiers();
        $this->assertEquals(['public'], \Reflection::getModifierNames($modifiers),
            "[-] setLanguage() method must be as public"
        );

        $setLanguage = $this->translate->setTranslatePath(self::TEST_PATH)->setLanguage(self::TEST_LANG);

        // 3. check instance of method

        $this->assertInstanceOf($this->reflection->getName(), $setLanguage,
            "[-] setLanguage() method must be as instance of ".self::TEST_CLASS
        );

    }

    /**
     * @covers \Translate\Translator::assign()
     * @covers \Translate\Translator::translate()
     */
    public function testAssign() {

        // 1. check method exist

        $this->assertTrue(
            method_exists($this->translate, 'assign'),
            '[-] Class Translate must have method assign()'
        );

        // 2. check method modifier

        $modifiers = (new \ReflectionMethod(self::TEST_CLASS, 'assign'))->getModifiers();
        $this->assertEquals(['public'], \Reflection::getModifierNames($modifiers),
            "[-] assign() method must be as public"
        );

        // 1. check method exist

        $this->assertTrue(
            method_exists($this->translate, 'translate'),
            '[-] Class Translate must have method translate()'
        );

        // 2. check method modifier

        $modifiers = (new \ReflectionMethod(self::TEST_CLASS, 'translate'))->getModifiers();
        $this->assertEquals(['public'], \Reflection::getModifierNames($modifiers),
            "[-] translate() method must be as public"
        );

        $assign = $this->translate
            ->setTranslatePath(self::TEST_PATH)
            ->setLanguage(self::TEST_LANG)
            ->assign(self::TEST_PART);

        // 3. check instance of method

        $this->assertInstanceOf($this->reflection->getName(), $assign,
            "[-] assign() method must be as instance of ".self::TEST_CLASS
        );

        // 4. check RIGHT and WRONG returns

        $translate = $assign->translate('HOME');

        $this->assertInternalType('string', $translate,
            "[-] translate() must return type as string if has right"
        );

        $translate = $assign->translate('WRONG');

        $this->assertInternalType('string', $translate,
            "[-] translate() must return type as string if has wrong"
        );

        // 5. check exception

        try {

            // get default property value
            $reflectionProperty = $this->reflection->getProperty('signature');

            $reflectionProperty->setAccessible(true);

            $this->signature = $reflectionProperty->setValue($this->translate, []);
            $this->translate->translate('CallException');
        }
        catch(\Phalcon\Exception $e) {
            // Expected exception caught! Woohoo! Ignore it
            $this->assertInstanceOf('Phalcon\Exception', $e,
                "[-] Exception must return Phalcon\\Exception instance"
            );
        }
    }

    /**
     * @covers \Translate\Translator::assign()
     */
    public function testAssignException() {

        // 4. check exception

        try {
            $assign = $this->translate
                ->setTranslatePath(self::TEST_PATH)
                ->setLanguage(self::TEST_LANG)
                ->assign('wrong_signature');

            $this->assertTrue(false, "Test failed");
        }
        catch(\Phalcon\Exception $e) {
            // Expected exception caught! Woohoo! Ignore it
            $this->assertInstanceOf('Phalcon\Exception', $e,
                "[-] Exception must return Phalcon\\Exception instance"
            );
        }
    }
}
