<?php namespace AlekseyP\MatomoTagManager\Components;

use AlekseyP\MatomoTagManager\Models\Settings;
use Cms\Classes\ComponentBase;
use Cms\Classes\Theme;
use Lang;

/**
 * Class TagManager
 * @package AlekseyP\MatomoTagManager\Components
 */
class TagManager extends ComponentBase
{
    /** @var string $mtmContainerIdThemeSetting */
    public $mtmContainerIdThemeSetting;

    /** @var string $mtmTrackerDomainThemeSetting */
    public $mtmTrackerDomainThemeSetting;

    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name' => 'alekseyp.matomotagmanager::lang.components.tagmanager.name',
            'description' => 'alekseyp.matomotagmanager::lang.components.tagmanager.description'
        ];
    }

    /**
     * @return array
     */
    public function defineProperties()
    {
        return [
            'container_id' => [
                'title' => Lang::get('alekseyp.matomotagmanager::lang.components.tagmanager.container_id'),
                'description' => Lang::get('alekseyp.matomotagmanager::lang.components.tagmanager.container_id_desc'),
                'default' => '',
                'type' => 'string',
                'placeholder' => 'XXXXXXXX'
            ]
        ];
    }

    /**
     * @return mixed
     */
    public function containerId()
    {
        return $this->property('container_id') ?: $this->mtmContainerIdThemeSetting ?: Settings::get('container_id');
    }

    /**
     * @return mixed
     */
    public function trackerDomain()
    {
        return $this->property('tracker_domain') ?: $this->mtmTrackerDomainThemeSetting ?: Settings::get('tracker_domain');
    }

    public function onRun()
    {
        $theme = Theme::getActiveTheme();
        $customSettings = $theme->getCustomData();
        $this->mtmContainerIdThemeSetting = $customSettings['mtmContainerId'];
        $this->mtmTrackerDomainThemeSetting = $customSettings['mtmTrackerDomain'];
    }
}
