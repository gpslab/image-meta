<?php
/**
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
    protected $width = 0;

    /**
     * @var int
     */
    protected $height = 0;

    /**
     * @var string
     */
    protected $mime = '';

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
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'mime' => $this->getMime(),
        ];
    }
}
