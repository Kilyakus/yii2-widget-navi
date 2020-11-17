<?php
namespace kilyakus\widget\navi;

class NaviAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/widget-navi'],'widget-navi');
        parent::init();
    }
}
