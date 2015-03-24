<?php namespace KurtJensen\Test;

use System\Classes\PluginBase;

/**
 * Test Plugin Information File
 */
class Plugin extends PluginBase
{
    public $url = '';

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Test',
            'description' => 'No description provided yet...',
            'author'      => 'KurtJensen',
            'icon'        => 'icon-leaf'
        ];
    }
    
    public function registerComponents()
    {
        return [
            'KurtJensen\Test\Components\PartOne' => 'PartOne'
        ];
    }

}
