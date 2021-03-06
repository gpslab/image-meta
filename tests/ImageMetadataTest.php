<?php
/**
 * GpsLab component.
 *
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @copyright Copyright (c) 2011, Peter Gribanov
 * @license   http://opensource.org/licenses/MIT
 */

namespace GpsLab\Component\ImageMeta\Tests;

use GpsLab\Component\ImageMeta\ImageMetadata;
use PHPUnit\Framework\TestCase;

class ImageMetadataTest extends TestCase
{
    public function testGetters()
    {
        $width = 100;
        $height = 200;
        $mime = 'image/jpeg';

        $data = new ImageMetadata($width, $height, $mime);

        $this->assertEquals($width, $data->width());
        $this->assertEquals($height, $data->height());
        $this->assertEquals($mime, $data->mime());

        $this->assertEquals([
            'width' => $width,
            'height' => $height,
            'mime' => $mime,
        ], $data->toArray());
    }
}
