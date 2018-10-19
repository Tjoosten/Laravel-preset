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
     * Installation class for the Activisme_BE preset. 
     * 
     * @return void
     */
    public static function install(): void 
    {
        static::updatePackages();   /** TODO */
        static::updateMix();        /** TODO */
        static::updateScripts();    /** TODO */
        static::updateStyles();     /** TODO */
    }
}