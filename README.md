# LightBox image galary widget for Yii2 Framework uses jQuery Lightbox v2.10.0 by Lokesh Dhakar

The extension uses jQuery Lightbox v2.10.0 by Lokesh Dhakar and makes image galary from php array of structure defined.

[LightBox image galary PHP Array generator](http://yii2.kadastrcard.ru/lightbox).

![LightBox image galary](http://yii2.kadastrcard.ru/uploads/lightbox.jpg)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run:

```bash
composer require salimkamboh/yii2-lightbox
```

or add

```bash
"salimkamboh/yii2-lightbox": "*"
```

to the require section of your `composer.json` file.

Usage
-----

Set link to extension in your view:

```php
use kartik\grid\GridView;
use salimkamboh\lightbox\LightBoxWidget;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'header' => 'Pictures',
            'content' => function ($data){
                $images = [               // images at popup window of prettyPhoto galary
                    1 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image1.jpg',
                            'thumb' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image1.jpg',
                            'title' => 'Image visible in widget',
                        ],
                    2 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image2.jpg',
                            'thumb' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image2.jpg',
                            'title' => 'image 1',
                        ],
                    3 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image3.jpg',
                            'thumb' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image3.jpg',
                            'title' => 'image 2',
                        ],
                    4 => [
                            'src' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image4.jpg',
                            'thumb' => 'http://yii2.kadastrcard.ru/uploads/prettyphoto/image4.jpg',
                            'title' => 'image 3',
                        ],
                ];
                return LightBoxWidget::widget([
                    'id'     =>'lightbox',  // id of plugin should be unique at page
                    'class'  =>'galary',    // class of plugin to define style
                    'height' =>'100px',     // height of image visible in widget
                    'width' =>'100px',      // width of image visible in widget
                    'images' => $images,
                ]);
            }
        ],
    ],
]);
```
<a href="mailto:salimkamboh@gmail.com">write comments to admin</a>
