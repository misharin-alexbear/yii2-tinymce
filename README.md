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
]); ?>
```

Screenshots
------------

<img src="https://d1ro8r1rbfn3jf.cloudfront.net/ms_131602/eRrZfAUtDSKR2TAdf7DzEBNh8q1usP/Create%2BMenu%2B2017-10-24%2B23-12-14.jpg?Expires=1508962363&Signature=M8Lt0MhKi1YgOWttEbB~r1~Cl0VkLrTpy6eMVW26u6vHwNeUjp5Cr7SNM0fMRp5TM89xW3UrVcGxSt0MpvOXtvFLkSM4luxyYu0SqWFs28VBtjjfLOZucPdNpCQZP-9ibXayw7TVLcP~Uotw6eUWv6GILErcvUJk-e3OnHpAd1X~BkoXEyU2lE5rFfV7gauW1WdPjnnxDQWb3vSasnCZ-ikj5SFNlRU3QITGVxKGPicyS3~A9N3I~7NDBe-2-rs8hukD4h-cTjbM8~olTSLyVTasmveiqIYGxlgdMGXhfelSWm4DCDrX1aJST5THap10dwEN7gDfbgWY0r-ZTqJeSA__&Key-Pair-Id=APKAJHEJJBIZWFB73RSA"/>

<img src="https://d1ro8r1rbfn3jf.cloudfront.net/ms_131602/1H5JxqOO1fV4RvjlylHjuy0lPj5uX5/scsd%2B2017-10-24%2B23-14-10.jpg?Expires=1508962516&Signature=O2oArGePC~aN7TE-wKuAW-viJH-ZhFR~xjsFOJ~rCs6sgiWEuygo2DsVOF2id5-2Gncxr9KA2pTC~KGlTh6-9qdYtXtnx6IPNV1CBf8fQ7bTrAR3s4zBlSkr5dZGDyZ-ZcjsHp3C8YTby2WDsJRJaBxmGEFbne1NblShehwHQAWBW5qRHgGVJxkankpfXaQ5jyTAL8ka6eY7Xvw4JaYDKsHZLNEa6KseMUZCzZupKGV4T2z78yQRoynbhVymReJdNl7281iBUOncqKnKvUj55xlfRotoKx02RHNeCA9fWbP9G91oEOodH8csX2H4xprk9DBsE3T4koh218QTAbG6RA__&Key-Pair-Id=APKAJHEJJBIZWFB73RSA"/>
