<?php

namespace Osamanagi\FilamentCalls\Commands;

use Illuminate\Console\Command;

class FilamentCallsCommand extends Command
{
    public $signature = 'filament-calls';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
