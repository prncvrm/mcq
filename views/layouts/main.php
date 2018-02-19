<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= Url::base()?>/app/styles/build/twenty1b26.css" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
</head>
<body>
<?php $this->beginBody() ?>
<?php echo $content; ?>
<?php $this->endBody() ?>
<script type="text/javascript" src="app/scripts/build/libs.js"></script>
	<script>
		var twenty = {
			"daysVisible": 20,
			"dayIndex": 0,
			"dayRequested": 0,
			// "videoSource": "https://player.vimeo.com/video/192474491?autoplay=1&title=0&portrait=0",
			// "videoSourcePost": "https://player.vimeo.com/video/196490587?autoplay=1&title=0&portrait=0"
		};
	</script>
	<script type="text/javascript" src="app/scripts/build/twenty1b26.js"></script>
</body>
</html>

