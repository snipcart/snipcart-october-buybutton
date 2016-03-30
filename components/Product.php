<?php namespace Snipcart\buybutton\components;

use Cms\Classes\ComponentBase;

class Product extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Product',
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
