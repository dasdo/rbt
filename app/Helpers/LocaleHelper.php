<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class LocaleHelper
{
    /**
     * Get available locales
     */
    public static function getAvailableLocales(): array
    {
        return [
            'es' => 'Español',
            'en' => 'English',
        ];
    }

    /**
     * Get current locale
     */
    public static function getCurrentLocale(): string
    {
        return Session::get('locale', config('app.locale'));
    }

    /**
     * Get locale name
     */
    public static function getLocaleName(string $locale): string
    {
        $locales = self::getAvailableLocales();
        return $locales[$locale] ?? $locale;
    }

    /**
     * Check if locale is active
     */
    public static function isActiveLocale(string $locale): bool
    {
        return self::getCurrentLocale() === $locale;
    }
}

