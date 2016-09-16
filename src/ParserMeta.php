<?php
/**
 * @author Peter Gribanov <info@peter-gribanov.ru>
 */

namespace GpsLab\Component\ImageMeta;

use Symfony\Component\Filesystem\Filesystem;

class ParserMeta
{
    /**
     * @var Filesystem
     */
    protected $fs;

    /**
     * @param Filesystem $fs
     */
    public function __construct(Filesystem $fs)
    {
        $this->fs = $fs;
    }

    /**
     * @param string $path
     *
     * @return DataMeta|null
     */
    public function getMeta($path)
    {
        if ($this->fs->exists($path) && ($info = @getimagesize($path))) {
            return new DataMeta($info[0], $info[1], $info['mime']);
        } else {
            return null;
        }
    }
}
