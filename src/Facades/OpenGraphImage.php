<?php

declare(strict_types=1);

namespace Fractal512\LaravelOpenGraphImage\Facades;

use Illuminate\Support\Facades\Facade;

class OpenGraphImage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-open-graph-image';
    }
}
