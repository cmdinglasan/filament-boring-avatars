<?php

namespace Cmdinglasan\FilamentBoringAvatars\Traits;

use Cmdinglasan\FilamentBoringAvatars\BoringAvatars;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasAvatarUrl
{
	public function avatarUrl(): Attribute
	{
		return new Attribute(
			get: fn () => app()->make(BoringAvatars::class)->get(
				$this->name,
				config('filament-boring-avatars.variant', 'marble'),
				config('filament-boring-avatars.size', 40),
				config('filament-boring-avatars.colors', []),
				config('filament-boring-avatars.url', 'https://source.boringavatars.com')
			)
		);
	}
}
