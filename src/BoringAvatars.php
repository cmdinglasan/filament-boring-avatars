<?php

namespace Cmdinglasan\FilamentBoringAvatars;

use Illuminate\Support\Str;

class BoringAvatars
{
    /**
     * Get the avatar URL from the Boring Avatars API.
     *
     * @param  string  $name          The name of the user.
     * @param  string  $variant       The variant of the avatar.
     * @param  int  $size          The size of the avatar.
     * @param  array  $colors        The colors of the avatar.
     * @return string               The URL of the avatar.
     *
     * @source https://github.com/boringdesigners/boring-avatars
     */
    public static function get(
        string $name = null,
        string $variant = 'marble',
        int $size = 40,
        array $colors = [],
        string $url = 'https://source.boringavatars.com'
    ): string {
        $name = Str::of($name)
            ->trim()
            ->explode(' ')
            ->map(fn (string $segment): string => filled($segment) ? mb_substr($segment, 0, 1) : '')
            ->join('+');

        $colors = self::getColors($colors);

        $imageUrl = "{$url}/{$variant}/{$size}/{$name}";

        if (! empty($colors)) {
            $imageUrl .= "?colors={$colors}";
        }

        return $imageUrl;
    }

    /**
     * Convert colors array to string.
     *
     * @param  array  $colors        The colors of the avatar.
     * @return string               The URL of the avatar.
     */
    private static function getColors(array $colors): string
    {
        if (is_array($colors)) {
            $colors = collect($colors)->map(function ($color) {
                if (Str::startsWith($color, '#')) {
                    return str_replace('#', '', $color);
                }
            })->toArray();

            $colors = implode(',', $colors);

            return $colors;
        }
    }
}
