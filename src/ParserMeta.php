<?php
/**
 * @author Peter Gribanov <info@peter-gribanov.ru>
 */

namespace GpsLab\Component\ImageMeta;

class ParserMeta
{
    /**
     * @param string $path
     *
     * @return DataMeta|null
     */
    public function getMeta($path)
    {
        if (file_exists($path) && ($info = @getimagesize($path))) {
            return new DataMeta($info[0], $info[1], $info['mime']);
        } else {
            return null;
        }
    }
}
