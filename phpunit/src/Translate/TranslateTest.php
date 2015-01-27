<?php
namespace Test\Translate;
use Translate\Translate;

/**
 * Class TranslateTest
 *
 * @package Test\Translate
 * @subpackage Test\Translate\TranslateTest
 * @since   PHP >=5.4.28
 * @version 1.0
 * @author  Stanislav WEB | Lugansk <stanisov@gmail.com>
 *
 */
class TranslateTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @const testing class
     */
    const TEST_CLASS =   'Translate\Translate';

    /**
     * Init class object
     *
     * @var Translate
     */
    private $translate;

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
     * @covers \Translate\Translate::__construct()
     */
    public function setUp()
    {
        $this->reflection       = new \ReflectionClass(self::TEST_CLASS);
        $this->translate        = new Translate();
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
     * @covers \Translate\Translate::setLanguage()
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

        $setLanguage = $this->translate->setLanguage('en');

        // 3. check instance of method

        $this->assertInstanceOf($this->reflection->getName(), $setLanguage,
            "[-] setLanguage() method must be as instance of ".self::TEST_CLASS
        );

    }

    /**
     * @covers \Translate\Translate::assign()
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

        $assign = $this->translate->assign('part');

        // 3. check instance of method

        $this->assertInstanceOf($this->reflection->getName(), $assign,
            "[-] assign() method must be as instance of ".self::TEST_CLASS
        );
    }

    /**
     * @covers \Translate\Translate::translate()
     */
    public function testTranslate() {

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
    }
}