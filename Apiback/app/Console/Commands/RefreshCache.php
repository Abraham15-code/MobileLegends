<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefreshCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh:cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This commando to delete all cache of system';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('config:cache', [
            '--cache',
        ]);
        $this->call('config:clear', [
            '--clear',
        ]);
        $this->call('cache:clear', [
            '--cache',
        ]);
        $this->call('view:clear', [
            '--view',
        ]);
        $this->call('route:cache', [
            '--route',
        ]);
    }
}
