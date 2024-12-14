<?php

use yii\helpers\Html;

?>
<div class="container donation p-3">
	<div class="card section">
		<div class="card-body">
			<?php echo $this->render('_donation.php',compact('model'));?>
		</div>
	</div>
	<div class="card section">
		<div class="card-body">
			<?php echo $this->render('_coordinates.php',compact('model'));?>
		</div>
	</div>
</div>
<?php
$this->registerCss(<<<CSS
	.container.donation{
		background-color:#DDD;
	}
	.section{
		margin:3rem auto;
		max-width:600px;
	}
CSS);