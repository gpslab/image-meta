<?php
/**
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @copyright Copyright (c) 2011, Peter Gribanov
 * @license   http://opensource.org/licenses/MIT
 */
namespace GpsLab\Component\ImageMeta\Tests;

use GpsLab\Component\ImageMeta\DataMeta;

class DataMetaTest extends \PHPUnit_Framework_TestCase
{
    public function testGetters()
    {
        $width = 100;
        $height = 200;
        $mime = 'image/jpeg';

        $data = new DataMeta($width, $height, $mime);

        $this->assertEquals($width, $data->getWidth());
        $this->assertEquals($height, $data->getHeight());
        $this->assertEquals($mime, $data->getMime());

        $this->assertEquals([
            'width' => $width,
            'height' => $height,
            'mime' => $mime,
        ], $data->toArray());
    }
}
