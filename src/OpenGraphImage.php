<?php

declare(strict_types=1);

namespace Fractal512\LaravelOpenGraphImage;

use Fractal512\OpenGraphImage\OpenGraphImage as BaseOpenGraphImage;

class OpenGraphImage extends BaseOpenGraphImage
{
    public function __construct()
    {
        $config = is_array(config('open-graph-image')) ? config('open-graph-image') : [];
        parent::__construct($config);
    }
}
