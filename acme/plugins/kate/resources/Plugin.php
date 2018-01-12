<?php namespace Kate\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails(){
        return [
            'name' => 'Kate',
            'description' => 'Provides awesome websites',
            'author' => 'Kate Cotsakis',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents(){
        return [
            '\Kate\Resources\Components\Links' => 'resourcesLinks'
        ];
    }
}