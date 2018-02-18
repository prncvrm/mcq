<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
<?php foreach ($bnoises as $b): ?>
<li>
<?= Html::encode("{$b->q_que}") ?>
<?= Html::encode("{$b->ans_a}") ?>
<?= Html::encode("{$b->ans_b}") ?>
<?= Html::encode("{$b->ans_c}") ?>
<?= Html::encode("{$b->ans_d}") ?>
</li>
<?php endforeach; ?>
</ul>