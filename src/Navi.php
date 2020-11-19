<?php
namespace kilyakus\widget\navi;

use Yii;
use kilyakus\widgets\Widget;

class Navi extends Widget
{
    public $pluginName = 'navi';

    public function run()
    {
        $this->initSettings();
        echo $this->renderInput();
    }

    public function registerAssets()
    {
        $view = $this->getView();
        NaviAsset::register($view);

        $this->registerPlugin($this->pluginName, $this->id);
    }

    protected function initSettings()
    {
        $this->registerAssets();
    }

    protected function renderInput()
    {
        return;
    }
}
