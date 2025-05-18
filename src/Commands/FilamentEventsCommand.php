<?php

namespace Munio\FilamentEvents\Commands;

use Illuminate\Console\Command;

class FilamentEventsCommand extends Command
{
    public $signature = 'filament-events';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
