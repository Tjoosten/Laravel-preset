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
            $command->info('All finished! Please compile your assets, and you are all set to go!');
        });
    }
}