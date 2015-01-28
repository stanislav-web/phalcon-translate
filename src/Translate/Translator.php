<?php
namespace Translate;
use Phalcon\Exception;
use Phalcon\Translate\Adapter\NativeArray as TranslateAdapterArray;

/**
 * Translate service class
 *
 * @package   Translate
 * @subpackage   Translate\Translator
 * @since     PHP >=5.4
 * @version   1.0
 * @author    Stanislav WEB | Lugansk <stanisov@gmail.com>
 * @copyright Stanislav WEB
 */
class Translator
{

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
     * Translate adapter
     *
     * @var \Phalcon\Translate\Adapter\NativeArray $adapter
     */
    private $signature  = '';

    /**
     * Setup translate path
     *
     * @param string $path
     * @return Translator
     */
    public function setTranslatePath($path) {
        $this->path = $path;

        return $this;
    }

    /**
     * Set preferred or selected language
     *
     * @param string $language
     * @return Translator
     */
    public function setLanguage($language) {
        $this->language = $language;

        return $this;
    }

    /**
     * Assign content to loaded translate file
     *
     * @param string $signature
     * @throws Exception
     * @return Translator|null
     */
    public function assign($signature) {

        $file = $this->path.$this->language.DIRECTORY_SEPARATOR.$signature.'.php';

        if(isset($this->required[$file]) === false) {

            if (file_exists($file) === true) {

                $content = require_once $file;
                $this->required[$file] = true;


                // assign to translate
                $this->adapter = new TranslateAdapterArray(['content' => [
                    $signature => $content
                ]]);

                // setup signature
                $this->signature = $this->adapter->offsetGet($signature);

                return $this;
            }
            else {
                throw new Exception('Could not find translate file: '.$file);
            }
        }
    }

    /**
     * Translate original string
     *
     * @param   string     $string
     * @return  string
     */
    public function translate($string) {

        // get selected signature
        if (array_key_exists($string, $this->signature) === false) {
            return $string;
        }
        return $this->signature[$string];
    }
}
