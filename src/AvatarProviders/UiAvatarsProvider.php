<?php

namespace Cmdinglasan\FilamentBoringAvatars\AvatarProviders;

use Cmdinglasan\FilamentBoringAvatars\BoringAvatars;
use Filament\AvatarProviders\Contracts\AvatarProvider;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Model;

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
