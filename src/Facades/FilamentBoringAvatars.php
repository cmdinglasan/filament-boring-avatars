<?php

namespace Cmdinglasan\FilamentBoringAvatars\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cmdinglasan\FilamentBoringAvatars\FilamentBoringAvatars
 */
class FilamentBoringAvatars extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \FilamentBoringAvatars\FilamentBoringAvatars::class;
    }
}
