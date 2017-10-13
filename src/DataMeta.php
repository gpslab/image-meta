<?php
/**
 * GpsLab component.
 *
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @copyright Copyright (c) 2011, Peter Gribanov
 * @license   http://opensource.org/licenses/MIT
 */

namespace GpsLab\Component\ImageMeta;

class DataMeta
{
    /**
     * @var int
     */
    private $width = 0;

    /**
     * @var int
     */
    private $height = 0;

    /**
     * @var string
     */
    private $mime = '';

    /**
     * @param int $width
     * @param int $height
     * @param string $mime
     */
    public function __construct($width, $height, $mime)
    {
        $this->width = $width;
        $this->height = $height;
        $this->mime = $mime;
    }

    /**
     * @return int
     */
    public function width()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function height()
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function mime()
    {
        return $this->mime;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'width' => $this->width(),
            'height' => $this->height(),
            'mime' => $this->mime(),
        ];
    }
}
