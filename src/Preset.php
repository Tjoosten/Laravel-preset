<?php 

namespace ActivismeBe\LaravelPreset; 

use Illuminate\Support\Arr;
use Illuminate\SupportFacades\File;
use Illuminate\Foundation\Console\Presets\Preset as PresetBase;

/**
 * Class Preset 
 * 
 * @package ActivismeBe\LaravelPreset
 */
class Preset extends PresetBase
{
    /**
     * Installation function for the Activisme_BE preset. 
     * 
     * @return void
     */
    public static function install(): void 
    {
        static::generateAuthStyles();
    }

    /**
     * Generate new SCSS files for the Laravel scaffolding. 
     * 
     * @return void
     */
    public static function generateAuthStyles(): void 
    {
        copy(__DIR__ . '/stubs/scss/login.scss', 'sass/login.scss');
    }
}