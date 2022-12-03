<?php

namespace Kastana\KsLaravelUtility\Commands;

use Illuminate\Console\Command;

class KsSyncPermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    public $signature = 'ks:sync-permission';

    /**
     * The console command description.
     *
     * @var string
     */
    public $description = 'Command to sync permission to database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->comment('All done');

        return Command::SUCCESS;
    }
}
