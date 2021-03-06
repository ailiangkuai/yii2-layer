<?php
/**
 * 邢帅教育
 * 本源代码由邢帅教育及其作者共同所有，未经版权持有者的事先书面授权，
 * 不得使用、复制、修改、合并、发布、分发和/或销售本源代码的副本。
 *
 * @copyright Copyright (c) 2016 xsteach.com all rights reserved.
 */

namespace ailiangkuai\yii2\widgets\layer;


use yii\web\AssetBundle;

/**
 * Class LayerAsset
 * @package ailiangkuai
 * @author yaoyongfeng
 */
class LayerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/ailiangkuai/yii2-layer/src/assets';
    public $js = [
        'layer.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}