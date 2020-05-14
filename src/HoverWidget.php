<?php


namespace chaslain\simplehover;


class HoverWidget extends \yii\base\Widget
{
    public $content; 
    
    public function init() 
    {
        HoverAsset::register($this->getView());
    }
    
    public function run()
    {
        return $this->render("hover", ["content" => $this->content]);
    }
}
