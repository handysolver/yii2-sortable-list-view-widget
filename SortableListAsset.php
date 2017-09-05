<?php
/**
 * @link https://github.com/handysolver/yii2-sortable-list-view-widget
 * @copyright Copyright (c) 2014 HimikLab
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace handysolver\sortablelist;

use yii\web\AssetBundle;

class SortableListAsset extends AssetBundle
{
    public $sourcePath = '@vendor/handysolver/yii2-sortable-list-view-widget/assets';

    public $js = [
        'js/jquery.sortable.listview.js',
    ];

    public $depends = [
        'yii\jui\JuiAsset',
    ];

    public $publishOptions = [
        'forceCopy'=>true,
    ];
}
