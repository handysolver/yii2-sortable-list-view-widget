<?php
/**
 * @link https://github.com/handysolver/yii2-sortable-list-view-widget
 * @copyright Copyright (c) 2014 HimikLab
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace handysolver\sortablelist;

use yii\helpers\Url;
use yii\widgets\ListView;

/**
 * Sortable version of Yii2 ListView widget.
 *
 * @author HimikLab
 * @package handysolver\sortablelist
 */
class SortableListView extends ListView
{
    /** @var string|array Sort action */
    public $sortableAction = ['sort'];

    public function init()
    {
        parent::init();
        $this->sortableAction = Url::to($this->sortableAction);
    }

    public function run()
    {
        $this->registerWidget();
        parent::run();
    }

    protected function registerWidget()
    {
        $view = $this->getView();
        $view->registerJs("jQuery('#{$this->options['id']}').SortableListView('{$this->sortableAction}');");
        SortableListAsset::register($view);
    }
}
