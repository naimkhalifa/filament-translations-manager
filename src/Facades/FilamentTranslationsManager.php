<?php

namespace Naimkhalifa\FilamentTranslationsManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Naimkhalifa\FilamentTranslationsManager\FilamentTranslationsManager
 */
class FilamentTranslationsManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Naimkhalifa\FilamentTranslationsManager\FilamentTranslationsManager::class;
    }
}
