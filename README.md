Yii2 TinyMCE widget
===================
Renders a TinyMCE WYSIWYG text editor plugin widget.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist misharin-alexbear/yii2-tinymce "*"
```

or add

```
"misharin-alexbear/yii2-tinymce": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use alexbear94\tinymce\TinyMce;

<?= $form->field($model, 'content')->widget(TinyMce::className(), [
    'clientOptions' => [
        'language' => 'ru',
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ],
    'triggerSaveOnBeforeValidateForm' => true,
]); ?>```
