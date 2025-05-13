<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ListModels extends Command
{
    protected $signature = 'list:models';
    protected $description = 'List all models in the application';

    public function handle()
    {
        $modelsPath = app_path('Models');
        $files = File::allFiles($modelsPath);

        foreach ($files as $file) {
            if ($file->getExtension() === 'php') {
                $this->info($file->getFilenameWithoutExtension());
            }
        }
    }
}
