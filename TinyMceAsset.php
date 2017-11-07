<?php
/**
 * Created by PhpStorm.
 * User: macbear
 * Date: 24.10.2017
 * Time: 21:16
 */

namespace alexbear94\tinymce;

use yii\web\AssetBundle;

class TinyMceAsset extends AssetBundle
{
    public $sourcePath = '@vendor/tinymce/tinymce';
    public $js = ['tinymce.min.js'];
    public $depends = ['yii\web\JqueryAsset'];
}
