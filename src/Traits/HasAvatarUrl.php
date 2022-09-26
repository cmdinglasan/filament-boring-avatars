<?php

namespace Cmdinglasan\FilamentBoringAvatars\Traits;

use FilamentBoringAvatars\FilamentBoringAvatarsServiceProvider;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasAvatarUrl
{
    public function avatarUrl(): Attribute
    {
        return new Attribute(
            get: fn() => (new FilamentBoringAvatarsServiceProvider())->get($this)
        )
    }
}