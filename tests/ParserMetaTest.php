<?php
/**
 * GpsLab component.
 *
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @copyright Copyright (c) 2011, Peter Gribanov
 * @license   http://opensource.org/licenses/MIT
 */
namespace GpsLab\Component\ImageMeta\Tests;

use GpsLab\Component\ImageMeta\ParserMeta;

class ParserMetaTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ParserMeta
     */
    protected $parser;

    /**
     * @var string
     */
    protected $filename;

    const IMAGE = 'R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7';

    protected function setUp()
    {
        $this->parser = new ParserMeta();
        $this->filename = tempnam(sys_get_temp_dir(), 'test');
    }

    protected function tearDown()
    {
        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }

    public function testParseNoFile()
    {
        $this->assertNull($this->parser->meta($this->filename));
    }

    public function testParseNotImage()
    {
        touch($this->filename);
        $this->assertNull($this->parser->meta($this->filename));
    }

    public function testParse()
    {
        file_put_contents($this->filename, base64_decode(self::IMAGE));

        $data = $this->parser->meta($this->filename);

        $this->assertInstanceOf('GpsLab\Component\ImageMeta\DataMeta', $data);
        $this->assertEquals(1, $data->width());
        $this->assertEquals(5, $data->weight());
        $this->assertEquals('image/gif', $data->mime());
    }
}
