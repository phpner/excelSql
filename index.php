<?php
require_once 'vendor/autoload.php';
require_once 'lib/excel_phpner.php';
// Создаем объект класса PHPExcel
$obj =  excelPhpner::getInstance();
$xls = $obj::$excelphp;
// Устанавливаем индекс активного листа
$xls->setActiveSheetIndex(0);
// Получаем активный лист
$sheet = $xls->getActiveSheet();
// Подписываем лист
$sheet->setTitle('Таблица умножения');

// Выводим содержимое файла
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
                 <?php
                    $v=1;
                    for ($t=0; $t <= 5; $t++) :
                 ?>
                     <tr>
                         <?php for ($i=0; $i <= 4 ; $i++) {?>
                             <td class="col-md-2 colectionTr"><?= $v?></td>
                             <?php $sheet->setCellValueByColumnAndRow($i, $t  +1 ,$v);
                            $sheet->getStyleByColumnAndRow($i,$t +1)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                            $v++;
                            ?>
                         <?php }?>
                     </tr>
                 <?php endfor?>
             </div>
             </tbody>
         </table>
        <span>сумма: </span>
        <div class="btn-primary btn allSum">0</div>
    </div>
<?php
$objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');
$objWriter->save('name.xlsx');
?>
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