<div class="catalog-default-index">
    <h1>Каталог</h1>
	<?php 
		echo yii\widgets\ListView::widget([
        'dataProvider' => $provider,
		'itemView' => '_item',
    ]);
	?>
</div>
