<?php

namespace salimkamboh\lightbox;

use yii\base\Widget;
use yii\web\JqueryAsset;

class LightBoxWidget extends Widget {
    
    public $id = 'lightbox';
    public $class='galary';
    public $width='';
    public $height='';
    public $images=[];

    public function run() {

        parent::run();

        $this->registryScript();

        return $this->render('lightbox',[
            'id' => $this->id,
            'class' => $this->class,
            'width' => $this->width,
            'height' => $this->height,
            'images' => $this->images,
        ]);
    }

    protected function registryScript()
    {
        $path = \Yii::$app->getAssetManager()->publish(__DIR__ . '/assets/');

        $this->getView()->registerCssFile($path[1] . '/css/lightbox.css');

        $this->getView()->registerJsFile(
            $path[1] . '/js/lightbox.js',
            [
                'position' => \yii\web\View::POS_END,
                'depends'  => ['\yii\web\JqueryAsset'],
            ]
        );

    }
}