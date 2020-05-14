<?php


namespace chaslain\simplehover;

/**
 * Description of HoverAsset
 *
 * @author Alan
 */
class HoverAsset extends \yii\web\AssetBundle
{
    public $baseUrl = __DIR__;
    public $sourcePath = __DIR__;
    public $css = [
        "style.css",
    ];
           
    public $js = [
        "script.js",
    ];
}
