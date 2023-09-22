<?php

namespace Naimkhalifa\FilamentTranslationsManager\Commands;

use Illuminate\Console\Command;

class FilamentTranslationsManagerCommand extends Command
{
    public $signature = 'filament-translations-manager';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
