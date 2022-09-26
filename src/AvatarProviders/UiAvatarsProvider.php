<?php

namespace Cmdinglasan\FilamentBoringAvatars\AvatarProviders;

use Illuminate\Support\Str;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;
use Cmdinglasan\FilamentBoringAvatars\BoringAvatars;
use Exception;
use Filament\AvatarProviders\Contracts\AvatarProvider;

class UiAvatarsProvider implements AvatarProvider
{
    public function get(Model $user): string
    {
        return BoringAvatars::get(
            Filament::getUserName($user),
            config('filament-boring-avatars.variant', 'marble'),
            config('filament-boring-avatars.size', 40),
            config('filament-boring-avatars.colors', []),
            config('filament-boring-avatars.url', 'https://source.boringavatars.com'),
        );
    }
}