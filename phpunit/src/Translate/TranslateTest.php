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
     */
    public function setUp()
    {
        $this->reflection = new \ReflectionClass('Translate\Translate');
        $this->translate       = new Translate();
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
}