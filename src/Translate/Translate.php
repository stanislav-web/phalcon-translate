<?php
namespace Translate;
use Phalcon\Exception;
use \Phalcon\Translate\Adapter\NativeArray as TranslateAdapterArray;

/**
 * Translate service class
 *
 * @package   Plugins
 * @subpackage   Plugins\Translate
 * @since     PHP >=5.4
 * @version   1.0
 * @author    Stanislav WEB | Lugansk <stanisov@gmail.com>
 * @copyright Stanislav WEB
 */
class Translate {

    /**
     * Translate directory path
     *
     * @access private
     * @var string
     */
    private $path = '';

    /**
     * Preferred or selected language
     *
     * @access private
     * @var string
     */
    private $language = '';

    /**
     * Required lang files
     *
     * @access private
     * @var array
     */
    private $required = [];

    /**
     * Translate adapter
     *
     * @var \Phalcon\Translate\Adapter\NativeArray $adapter
     */
    private $adapter;

    /**
     * Define an empty constructor. To extend of parent
     */
    public function __construct() {}

    /**
     * Setup translate path
     *
     * @param string $path
     * @return Translate
     */
    public function setTranslatePath($path) {
        $this->path =   $path;

        return $this;
    }

    /**
     * Set preferred or selected language
     *
     * @param string $language
     * @return Translate
     */
    public function setLanguage($language) {
        $this->language =   $language;

        return $this;
    }

    /**
     * Assign content to loaded translate file
     *
     * @param string $signature
     * @throws Exception
     * @return \Phalcon\Translate\Adapter\NativeArray
     */
    public function assign($signature) {

        $file = $this->path.$this->language.DIRECTORY_SEPARATOR.$signature.'.php';

        if(!isset($this->required[$file])) {

            if (file_exists($file)) {

                $content = require_once $file;
                $this->required[$file] = true;

                // setup signature
                $this->adapter = new TranslateAdapterArray(['content' => [
                    $signature => $content
                ]]);

                // get selected signature
                $this->adapter->offsetGet($signature);
                return $this;
            }
            else {
                throw new Exception('Could not find translate file: '.$file);
            }
        }
    }

    /**
     * Translate original string
     * @param   string     $string
     * @param   null $placeholders
     * @return  mixed
     */
    public function translate($string, $placeholders = null) {

        if ($this->adapter->exists($string) === true) {
            return $index;
        }
        $index = $this->adapter->query($string, $placeholders);
        return $index;
    }
}