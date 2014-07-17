<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var common\models\Page $model
 */

$this->title = $model->title;
$this->addBreadcrumb('页面',['page/index']);
$this->addBreadcrumb($this->title);

?>
<div class="container">
	
		<div class="tbox content-detail border">
	
			<h1><?= Html::encode($this->title) ?></h1>
		
			<?php if(!empty($model['summary'])):?>
			<div class="contentSummary border">
				<?php echo $model['summary'];?>
			</div>
			<?php endif;?>
			<div class="contentContent">
				<?php echo $model['body'];?>
			</div>
		</div>
	
</div>

