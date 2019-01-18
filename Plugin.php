<?php namespace AlekseyP\MatomoTagManager;

use System\Classes\PluginBase;

/**
 * Class Plugin
 * @package AlekseyP\MatomoTagManager
 */
class Plugin extends PluginBase
{

    /**
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'alekseyp.matomotagmanager::lang.plugin.name',
            'description' => 'alekseyp.matomotagmanager::lang.plugin.description',
            'author' => 'AlekseyP',
            'icon' => 'icon-area-chart',
            'homepage' => 'https://github.com/alekseyp/octobercms-matomotagmanager'
        ];
    }

    /**
     * @return array
     */
    public function registerComponents()
    {
        return [
            'AlekseyP\MatomoTagManager\Components\TagManager' => 'mtmCode'
        ];
    }

    /**
     * @return array
     */
    public function registerSettings()
    {
        return [
            'config' => [
                'label' => 'alekseyp.matomotagmanager::lang.plugin.name',
                'icon' => 'icon-area-chart',
                'description' => 'alekseyp.matomotagmanager::lang.settings.description',
                'class' => 'AlekseyP\MatomoTagManager\Models\Settings',
                'permissions' => ['aleksey.matomotagmanager.settings'],
                'order' => 600
            ]
        ];
    }
}
