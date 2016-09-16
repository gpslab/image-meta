[![Latest Stable Version](https://poser.pugx.org/gpslab/image-meta/v/stable.png)](https://packagist.org/packages/gpslab/image-meta)
[![Latest Unstable Version](https://poser.pugx.org/gpslab/image-meta/v/unstable.png)](https://packagist.org/packages/gpslab/image-meta)
[![Total Downloads](https://poser.pugx.org/gpslab/image-meta/downloads)](https://packagist.org/packages/gpslab/image-meta)
[![Build Status](https://travis-ci.org/gpslab/image-meta.svg?branch=master)](https://travis-ci.org/gpslab/image-meta)
[![Coverage Status](https://coveralls.io/repos/github/gpslab/image-meta/badge.svg?branch=master)](https://coveralls.io/github/gpslab/image-meta?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gpslab/image-meta/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gpslab/image-meta/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/4cfdc9e9-6bdb-406a-8340-aec2e844d6a1/mini.png)](https://insight.sensiolabs.com/projects/4cfdc9e9-6bdb-406a-8340-aec2e844d6a1)
[![StyleCI](https://styleci.io/repos/68383765/shield?branch=master)](https://styleci.io/repos/68383765)
[![Dependency Status](https://www.versioneye.com/user/projects/57dc1925037c200040cdcee8/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/57dc1925037c200040cdcee8)
[![License](https://poser.pugx.org/gpslab/image-meta/license.png)](https://packagist.org/packages/gpslab/image-meta)

Library for get image meta data
===============================

## Installation

Pretty simple with [Composer](http://packagist.org), run:

```sh
composer require gpslab/image-meta
```

## Usage

```
$path = ''; // path to image
$parser = new ParserMeta();

$data = $parser->getMeta($path);

// access from getters
echo $data->getWidth();
echo $data->getHeight();
echo $data->getMime();

// access as array
$array = $data->toArray();
echo $array['width'];
echo $array['height'];
echo $array['mime'];
```

## License

This bundle is under the [MIT license](http://opensource.org/licenses/MIT). See the complete license in the file: LICENSE
