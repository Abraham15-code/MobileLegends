<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeServices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Let create a file of type services';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if(!File::isDirectory('Services')) {
            File::makeDirectory('Services',0777, true);
        };

        $name = $this->argument('name');
        $servicePath = app_path("Services/{$name}.php");
        $servicePath = str_replace(['\app','/'],['','\\'],$servicePath);

        if (File::exists($servicePath)) {
            $this->error('Service already exists!');
            return;
        }

        File::put($servicePath, $this->serviceStub());

        $this->info('Service ´'.$name.'´ created successfully!');
    }

    protected function serviceStub()
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
