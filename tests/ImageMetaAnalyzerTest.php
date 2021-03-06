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
use PHPUnit\Framework\TestCase;

class ImageMetaAnalyzerTest extends TestCase
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

        $this->assertInstanceOf('GpsLab\Component\ImageMeta\ImageMetadata', $data);
        $this->assertEquals(1, $data->width());
        $this->assertEquals(5, $data->height());
        $this->assertEquals('image/gif', $data->mime());
    }

    public function imageFileProvider()
    {
        $imagePath = __DIR__.'/images/test';

        return [
            [$imagePath.'.gif', 69, 24, 'image/gif'],
            [$imagePath.'.jpg', 69, 24, 'image/jpeg'],
            [$imagePath.'.png', 69, 24, 'image/png'],
            [$imagePath.'.tif', 69, 24, 'image/tiff'],
        ];
    }

    /**
     * @dataProvider imageFileProvider
     */
    public function testAnalyzeOnImageFiles($imagePath, $expectedWidth, $expectedHeight, $expectedMime)
    {
        $data = $this->analyzer->analyze($imagePath);

        $this->assertEquals($expectedWidth, $data->width());
        $this->assertEquals($expectedHeight, $data->height());
        $this->assertEquals($expectedMime, $data->mime());
    }
}
