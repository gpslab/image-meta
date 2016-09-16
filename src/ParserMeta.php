<?php
/**
 * @author Peter Gribanov <info@peter-gribanov.ru>
 */
namespace GpsLab\Component\ImageMeta;

class ParserMeta
{
    /**
     * @param string $filename
     *
     * @return DataMeta|null
     */
    public function getMeta($filename)
    {
        if (file_exists($filename) && ($info = @getimagesize($filename))) {
            return new DataMeta($info[0], $info[1], $info['mime']);
        } else {
            return null;
        }
    }
}
