[![Latest Stable Version](https://img.shields.io/packagist/v/gpslab/image-meta.svg?maxAge=&label=stable)](https://packagist.org/packages/gpslab/image-meta)
[![Total Downloads](https://img.shields.io/packagist/dt/gpslab/image-meta.svg?maxAge=)](https://packagist.org/packages/gpslab/image-meta)
[![Build Status](https://img.shields.io/travis/gpslab/image-meta.svg?maxAge=)](https://travis-ci.org/gpslab/image-meta)
[![Coverage Status](https://img.shields.io/coveralls/gpslab/image-meta.svg?maxAge=)](https://coveralls.io/github/gpslab/image-meta?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/gpslab/image-meta.svg?maxAge=)](https://scrutinizer-ci.com/g/gpslab/image-meta/?branch=master)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/4cfdc9e9-6bdb-406a-8340-aec2e844d6a1.svg?maxAge=&label=SLInsight)](https://insight.sensiolabs.com/projects/4cfdc9e9-6bdb-406a-8340-aec2e844d6a1)
[![StyleCI](https://styleci.io/repos/68383765/shield?branch=master)](https://styleci.io/repos/68383765)
[![License](https://img.shields.io/packagist/l/gpslab/image-meta.svg?maxAge=)](https://github.com/gpslab/image-meta)

Library for get image meta data
===============================

## Installation

Pretty simple with [Composer](http://packagist.org), run:

```sh
composer require gpslab/image-meta
```

## Usage

```php
$path = ''; // path to image
$analyzer = new ImageMetaAnalyzer();

$data = $analyzer->analyze($path);

// access from getters
echo $data->width();
echo $data->height();
echo $data->mime();

// access as array
$array = $data->toArray();
echo $array['width'];
echo $array['height'];
echo $array['mime'];
```

## License

This bundle is under the [MIT license](http://opensource.org/licenses/MIT). See the complete license in the file: LICENSE
