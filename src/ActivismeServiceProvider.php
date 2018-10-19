<?php 

namespace ActivismeBe\LaravelPreset\ActivismeServiceProvider; 

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

/**
 * Class ActivismeServiceProvider 
 * 
 * @package ActivismeBe\LaravelPreset
 */
class ActivismeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services 
     * 
     * @return void
     */
    public function boot(): void 
    {
        PresetCommand::macro('activisme_BE', function ($command) {
            Preset::install(); 
           
            $command->info('Misfits scaffolding installed successfully.'); 
            $command->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}