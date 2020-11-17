<?php
namespace kilyakus\widget\navi;

use Yii;
use kilyakus\widgets\InputWidget;

class Navi extends InputWidget
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

        $view->registerJs($js);
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
