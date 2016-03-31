<?php namespace Snipcart\Snipcart\Components;

use Cms\Classes\ComponentBase;
use Snipcart\Snipcart\Models\Settings;

class BuyButton extends ComponentBase
{
    public function onRun()
    {
        $this->addJs("https://cdn.snipcart.com/scripts/snipcart.js", [
            'id' => 'snipcart', 
            'data-api-key' => Settings::get('api_key')
        ]);

        $this->addCss("https://cdn.snipcart.com/themes/base/snipcart.min.css");
    }

    public function componentDetails()
    {
        return [
            'name'        => 'BuyButton',
            'description' => 'Add a snipcart product to your page'
        ];
    }

    public function defineProperties()
    {
        return [
            'id' => [
                'description'       => 'The desired id of your product',
                'title'             => 'Id',
            ],
            'name' => [
                'description'       => 'The desired name of your product',
                'title'             => 'Name',
            ],
            'url' => [
                'description'       => 'The url where your product resides',
                'title'             => 'URL',
            ],
            'image' => [
                'description'       => 'The path to the image ressource',
                'title'             => 'Image',
            ],
            'description' => [
                'description'       => 'The description of your product',
                'title'             => 'Description',
            ],
            'price' => [
                'description'       => 'The price of your product',
                'title'             => 'Price',
            ]
        ];
    }
}
