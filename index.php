<?php
require_once 'vendor/autoload.php';
// Создаем объект класса PHPExcel
$phpner = new \lib\ExcelPhpner();
$sheet = $phpner->getSheet();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>backbone</title>
</head>
<body>
<table class="inn">
</table>
     <div class="container">
     <h2 class="text-center">Таблица exel</h2>
         <table  class="table">
             <thead >
             <tr>
                 <th class="text-center">Имя</th>
                 <th class="text-center">Возраст</th>
                 <th class="text-center">Изменить</th>
             </tr>
             </thead>
             <tbody class="innerTable">
             <div id="innerTable" >
                <?php $phpner->loop(); ?>
             </div>
             </tbody>
         </table>
        <span>сумма: </span>
        <div class="btn-primary btn allSum">0</div>
    </div>
<script type="x-tmpl" id="list_tmpl">
<div class='container'>
<tr>
<% for(var i = 0; i < mods.length; i++){ %>
    <% var mod = mods[i]; %>
    <td><%= mod.value%></td>
<% }; %>
</tr>
</div>
</script>
	<script src="assets/js/main.js"></script>
</body>
</html>