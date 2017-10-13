<?php
/**
 * GpsLab component.
 *
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @copyright Copyright (c) 2011, Peter Gribanov
 * @license   http://opensource.org/licenses/MIT
 */

namespace GpsLab\Component\ImageMeta\Tests;

use GpsLab\Component\ImageMeta\ImageMetaAnalyzer;

class ImageMetaAnalyzerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ImageMetaAnalyzer
     */
    private $analyzer;

    /**
     * @var string
     */
    private $filename;

    const IMAGE = 'R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7';

    protected function setUp()
    {
        $this->analyzer = new ImageMetaAnalyzer();
        $this->filename = tempnam(sys_get_temp_dir(), 'test');
    }

    protected function tearDown()
    {
        if (file_exists($this->filename)) {
            unlink($this->filename);
        }
    }

    public function testNoFile()
    {
        $this->assertNull($this->analyzer->analyze($this->filename));
    }

    public function testNotImage()
    {
        touch($this->filename);
        $this->assertNull($this->analyzer->analyze($this->filename));
    }

    public function testAnalyze()
    {
        file_put_contents($this->filename, base64_decode(self::IMAGE));

        $data = $this->analyzer->analyze($this->filename);

        $this->assertInstanceOf('GpsLab\Component\ImageMeta\DataMeta', $data);
        $this->assertEquals(1, $data->width());
        $this->assertEquals(5, $data->height());
        $this->assertEquals('image/gif', $data->mime());
    }
}
