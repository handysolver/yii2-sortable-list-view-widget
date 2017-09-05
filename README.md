Sortable ListView Widget for Yii2
========================
Sortable modification of standard Yii2 ListView widget.

Credits
------------
This library has been picked up from [himiklab's gridview sortable](https://github.com/himiklab/yii2-sortable-grid-view-widget) and has been customised to work with ListView. Great work himiklab!


Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

* Either run

```
php composer.phar require --prefer-dist "handysolver/yii2-sortable-list-view-widget" "*"
```

or add

```json
"handysolver/yii2-sortable-list-view-widget" : "*"
```

to the `require` section of your application's `composer.json` file.

* Add to your database new `unsigned int` attribute, such `sortOrder`.

* Add new behavior in the AR model, for example:

```php
use handysolver\sortablelist\SortableListBehavior;

public function behaviors()
{
    return [
        'sort' => [
            'class' => SortableListBehavior::className(),
            'sortableAttribute' => 'sortOrder'
        ],
    ];
}
```

* Add action in the controller, for example:

```php
use handysolver\sortablelist\SortableListAction;

public function actions()
{
    return [
        'sort' => [
            'class' => SortableListAction::className(),
            'modelName' => Model::className(),
        ],
    ];
}
```

Usage
-----
* Use SortableListView as standard ListView with `sortableAction` option.
You can also subscribe to the JS event 'sortableSuccess' generated widget after a successful sorting.
