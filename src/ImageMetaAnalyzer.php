<?php
/**
 * GpsLab component.
 *
 * @author    Peter Gribanov <info@peter-gribanov.ru>
 * @copyright Copyright (c) 2011, Peter Gribanov
 * @license   http://opensource.org/licenses/MIT
 */

namespace GpsLab\Component\ImageMeta;

class ImageMetaAnalyzer
{
    /**
     * @param string $filename
     *
     * @return ImageMetadata|null
     */
    public function analyze($filename)
    {
        if (file_exists($filename) && ($info = @getimagesize($filename))) {
            return new ImageMetadata($info[0], $info[1], $info['mime']);
        } else {
            return null;
        }
    }
}
