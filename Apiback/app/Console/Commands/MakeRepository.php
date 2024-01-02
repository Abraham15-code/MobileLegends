<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Let create a file of type repository';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if(!File::isDirectory('Repositories')) {
            File::makeDirectory('Repositories');
        }

        $name = $this->argument('name');
        $repositoryPath = app_path("Repositories/{$name}.php");
        $repositoryPath = str_replace(['\app','/'],['','\\'],$repositoryPath);

        if (File::exists($repositoryPath)) {
            $this->error('Repository already exists!');
            return;
        }

        File::put($repositoryPath, $this->repositoryStub());

        $this->info('Repository ´'.$name.'´ created successfully!');
    }

    protected function repositoryStub()
    {
        $stub = <<<'STUB'
        <?php

        namespace App\Services;

        class {name}Service
        {
            public function _construct(){
                // values init
            }
            // Your service logic here
        }
        STUB;

        return str_replace('{name}', $this->argument('name'), $stub);
    }
}
