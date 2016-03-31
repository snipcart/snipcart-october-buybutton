<?php namespace Snipcart\Snipcart;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Snipcart',
            'description' => 'Integrate Snipcart with October CMS',
            'author'      => 'snipcart',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Snipcart\Snipcart\Components\BuyButton' => 'BuyButton'
        ];
    }

    public function registerSettings()
    {
         return [
            'settings' => [
                'label'       => 'Api Key',
                'description' => 'Manage your Api Key.',
                'category'    => 'Snipcart',
                'icon'        => 'icon-cog',
                'class'       => 'Snipcart\Snipcart\Models\Settings',
                'order'       => 500
            ]
        ];
    }

}
