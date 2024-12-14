<?php

?>
<h3 class="text-center">Моето дарение</h3>
<div class="btn-group d-flex m-3" data-bs-toggle="buttons">
	<label class="btn btn-warning" >
		<input type="radio" class="me-2" name="period" id="" value="once" checked /> Еднократно 
	</label>
	<label class="btn btn-warning" >
		<input type="radio" name="period" value="monthly" /> Месечно
	</label>
</div>
<div class="text-center m-3">Text text text</div>

<div class="btn-group d-flex m-3" data-bs-toggle="buttons">
	<label class="btn btn-warning" >
		<input type="radio" class="me-2" name="amount" value="25" checked /> &euro;25 
	</label>
	<label class="btn btn-warning" >
		<input type="radio" name="amount" value="40" /> &euro; 40
	</label>
	<label class="btn btn-warning" >
		<input type="radio" name="amount" value="65" /> &euro; 64
	</label>
	<label class="btn btn-warning" >
		<input type="radio" name="amount" value="1500" /> &euro; 1,500
	</label>
</div>

<div class="m-3">
	Въведи друга сума
	<div class="input-group">
		<span class="input-group-text">&euro;</span>
		<input type="number" class="form-control" placeholder="0" min="0" max="5000"/>
	</div>
</div>