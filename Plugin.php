<?php namespace Snipcart\buybutton;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'buybutton',
            'description' => 'Shows how to integrate snipcart with October CMS',
            'author'      => 'snipcart',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\Snipcart\Buybutton\Components\Product' => 'Product'
        ];
    }
}
