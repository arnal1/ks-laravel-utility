<?php

namespace Kastana\KsLaravelUtility\Commands;

use Illuminate\Console\Command;

class KsLaravelUtilityCommand extends Command
{
    public $signature = 'ks-laravel-utility';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
