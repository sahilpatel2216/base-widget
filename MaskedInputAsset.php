<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace mywidget\base;

use yii\web\AssetBundle;

/**
 * The asset bundle for the [[MaskedInput]] widget.
 *
 * Includes client assets of [jQuery input mask plugin](https://github.com/RobinHerbots/jquery.inputmask).
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 2.0
 */
class MaskedInputAsset extends AssetBundle
{
    public $sourcePath = '__DIR__ ./assets/jquery.inputmask/dist';
    public $js = [
        'jquery.inputmask.bundle.js'
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
