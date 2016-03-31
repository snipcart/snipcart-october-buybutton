<?php namespace Snipcart\Snipcart\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'snipcart_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}