<?php

namespace Cmdinglasan\FilamentBoringAvatars\Traits;

use Cmdinglasan\FilamentBoringAvatars\BoringAvatars;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasAvatarUrl
{
    public function avatarUrl(): Attribute
    {
        return new Attribute(
            get: fn () => app()->make(BoringAvatars::class)->get($this)
        );
    }
}
