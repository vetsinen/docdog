<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'it says';
$this->params['breadcrumbs'][] = $this->title;
$a = [1,3,6,9,14,25];
?>
<div class="site-say">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
<?php print_r($a);?>