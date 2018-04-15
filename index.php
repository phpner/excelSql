<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>backbone</title>
</head>
<body>
	<div class="container text-center">
	<ul class="innerView" >
		<h1>Наша таблица где-то тут </h1>
		<br>
		<span id="innerView"></span>
	</ul>
	</div>

	<script type="text/template"  class="viewNewTr" >
		<table  class="table">
			<thead >
				<tr>
					<th class="text-center">Имя</th>
					<th class="text-center">Возраст</th>
					<th class="text-center">Изменить</th>
				</tr>
			</thead>
			<tbody>
					
				<?php $v=1; for ($t=0; $t <= 10; $t++) :?>
					<tr>
						<?php for ($i=0; $i <= 2 ; $i++) {?>
							<td class="col-md-2"><?= $v++ ?></td>			
						<?php }?>
					</tr>
				<?php endfor?>
			</tbody>
		</table>		
	</script>

	<script type="text/template" class="viewTable">
		<button class="btn-success btn" id="addNewTr">Добавить новый элемент</button>	
		<div class="innderContainer"></div>
		<span>сумма: </span>
		<div class="btn-primary btn allSum">0</div>	
	</script>

	<script src="js/jquery.2.2.4.min.js"></script>
	<script src="js/underscore.js"></script>
	<script src="js/backbone.js"></script>
<script src="model/modeTable.js"></script>
<script src="view/viewTabel.js"></script>
<script src="view/viewTabels.js"></script> 

	<script>	

		$(function()
		{
		var modelT = new modelTable({
			name : "sanin"
		});
		var viewT = new viewTabels({
			model: modelT,
			el: '#innerView'
		});
		});
	</script>
</body>
</html>