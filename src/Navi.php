<?php
namespace kilyakus\widget\navi;

use Yii;
use kilyakus\widgets\Widget;

class Navi extends Widget
{
    public function run()
    {
        $this->initSettings();
        echo $this->renderInput();
    }

    public function registerAssets()
    {
        $view = $this->getView();
        NaviAsset::register($view);
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
