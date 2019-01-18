<?php namespace AlekseyP\MatomoTagManager\Models;

use October\Rain\Database\Model;

/**
 * Class Settings
 * @package AlekseyP\MatomoTagManager\Models
 */
class Settings extends Model
{
    /**
     * @var array
     */
    public $implement = ['System.Behaviors.SettingsModel'];

    /**
     * @var string
     */
    public $settingsCode = 'alekseyp_matomotagmanager_settings';

    /**
     * @var string
     */
    public $settingsFields = 'fields.yaml';
}